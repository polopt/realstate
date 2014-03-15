<?php

defined('SYSPATH') or die('No direct script access.');

class Adaptivepayment {

    public $receiverList = array();
    public $senderEmail = "seller_1253314668_biz@paypal.com";
    public $returnUrlHash = "";

    function pay()
    {
	if (Kohana::config('paypal.API_REQUEST_FORMAT') == "SOAP11")
	{
	    return $this->__soap_call();
	}
	else
	{
	    return $this->__xml_call();
	}
    }

    private function __xml_call()
    {
	//set PayPal Endpoint
	if (Kohana::config('paypal.sandbox'))
	{
	    $url = trim("https://svcs.sandbox.paypal.com/AdaptivePayments/Pay");
	}
	else
	{
	    $url = trim("https://svcs.paypal.com/AdaptivePayments/Pay");
	}

	$cancelUrl = Kohana::config('paypal.cancelUrl');
	$returnUrl = Kohana::config('paypal.returnUrl');
	$currencyCode = Kohana::config('paypal.currencyCode');
	$errorLanguage = Kohana::config('paypal.errorLanguage');
//dumper($url);die;
	$receiver_data = "";
	foreach ($this->receiverList as $receiver)
	{
	    $receiver_data.=<<<XML
		<receiver>
			<amount>{$receiver->amount}</amount>
			<email>{$receiver->email}</email>
			<primary>{$receiver->primary}</primary>
		</receiver>
XML;
	}


	$body_data = <<<XML
<?xml version="1.0" encoding="utf-8"?>
<payRequest>
	<actionType>PAY</actionType>
	<cancelUrl>{$cancelUrl}</cancelUrl>
	<currencyCode>{$currencyCode}</currencyCode>
	<returnUrl>{$returnUrl}/{$this->returnUrlHash}</returnUrl>
	<receiverList>
		{$receiver_data}
	</receiverList>
	<requestEnvelope>
		<errorLanguage>{$errorLanguage}</errorLanguage>
	</requestEnvelope>
</payRequest>
XML;


	$xml = simplexml_load_string($body_data);

	$contents = $xml->asXML();


	$paramslist = Kohana::config('paypal.auth');

	//create request and add headers
	$params = array("http" => array(
		"method" => "POST",
		"content" => $contents,
		"header" => "X-PAYPAL-SECURITY-USERID: ".$paramslist['API_USERNAME']."\r\n".
		"X-PAYPAL-SECURITY-SIGNATURE: ".$paramslist['API_SIGNATURE']."\r\n".
		"X-PAYPAL-SECURITY-PASSWORD: ".$paramslist['API_PASSWORD']."\r\n".
		"X-PAYPAL-APPLICATION-ID: ".Kohana::config('paypal.API_APIID')."\r\n".
		"X-PAYPAL-REQUEST-DATA-FORMAT: ".Kohana::config('paypal.API_REQUEST_FORMAT')."\r\n".
		"X-PAYPAL-RESPONSE-DATA-FORMAT: ".Kohana::config('paypal.API_RESPONSE_FORMAT')."\r\n"
	    )
	);


	//create stream context
	$ctx = stream_context_create($params);


	//open the stream and send request
	$fp = @fopen($url, "r", false, $ctx);

	//get response
	$response = stream_get_contents($fp);

	//check to see if stream is open
	if ($response === false)
	{
	    throw new Exception("php error message = "."$php_errormsg");
	}

	$xmlresponse = simplexml_load_string($response);
	$ack = trim($xmlresponse->responseEnvelope->ack);
	$paykey = trim($xmlresponse->payKey);

	//close the stream
	fclose($fp);

	//parse response
	if ($ack === 'Success')
	{
	    return array(
		'status' => 'success',
		'url' => "https://www.sandbox.paypal.com/webscr?cmd=_ap-payment&paykey=".$paykey
	    );
	}
	else
	{
	    return array(
		'status' => 'error',
		'message' => $xmlresponse->error->message,
		'error_id' => $xmlresponse->error->errorId
	    );
	}
    }

    private function __soap_call()
    {
	//create instance of the complex types classes
	$request_envelope = new Requestenvelope();
	$xreceiver = new Receiver();

	//creating instance of the PayRequest type for Pay Operation
	$params = new Payrequest();
	$params->requestEnvelope = $request_envelope;
	$params->actionType = 'PAY';
	$params->memo = 'test';
	$params->currencyCode = Kohana::config('paypal.currencyCode');
	$params->cancelUrl = Kohana::config('paypal.cancelUrl');
	$params->returnUrl = Kohana::config('paypal.returnUrl');
	$params->receiverList = $this->receiverList;
	$params->senderEmail = $this->senderEmail;
	$params->feesPayer = Kohana::config('paypal.feesPayer');

	$paramslist = Kohana::config('paypal.auth');

	//API credentials - http headers
	$headers_string = "X-PAYPAL-SECURITY-USERID: ".$paramslist['API_USERNAME']."\r\n".
		"X-PAYPAL-SECURITY-PASSWORD: ".$paramslist['API_PASSWORD']."\r\n".
		"X-PAYPAL-SECURITY-SIGNATURE: ".$paramslist['API_SIGNATURE']."\r\n".
		"X-PAYPAL-SERVICE-VERSION: 1.4.0\r\n".
		"X-PAYPAL-MESSAGE-PROTOCOL: SOAP12\r\n".
		"X-PAYPAL-REQUEST-SOURCE: PHP_SOAP_SDK\r\n".
		"X-PAYPAL-APPLICATION-ID: APP-80W284485P519543T";


	$opts = array('http' => array('method' => 'POST', 'header' => $headers_string));


	$ctx = stream_context_create($opts);

	ini_set("soap.wsdl_cache_enabled", "0");
	$soapClient = new SoapClient("https://svcs.sandbox.paypal.com/AdaptivePayments?wsdl",
			array('location' => "https://svcs.sandbox.paypal.com/AdaptivePayments/Pay/",
			    'uri' => "urn:Pay", //define the soap action
//			    'soap_version' => "1.6.0",
//			    'trace' => 1, 
			    'stream_context' => $ctx,
			    'encoding' => 'UTF-8',
			    'trace' => true, //add this line for debugging purpose during development
			    'exceptions' => true)
	); //adding the stream context option containing the http headers
//dumper($soapClient);die;

	$response = $soapClient->Pay($params);

	//The $response is a PayResponse object type.
	//Retriving few information from the response
//	$payKey = $response->payKey;
//	$timestamp = $response->responseEnvelope->timestamp;
//	$ackCode  = $response->responseEnvelope->ack;
//	$build  = $response->responseEnvelope->build;
//	$correlationId  = $response->responseEnvelope->correlationId;
//	$paymentExecStatus = $response->paymentExecStatus;

	return $response->paymentExecStatus;
    }

}

?>
