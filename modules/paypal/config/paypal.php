<?php

defined('SYSPATH') or die('No direct script access.');

return array(
    'sandbox'=>FALSE,
    'auth' => array(
        'API_USERNAME' => 'info_1299861096_biz_api1.bazartes.com',
        'API_PASSWORD' => '6KM8H47ZC69GUNBL',
        'API_SIGNATURE' => 'AciBYFw4fsXV-OouAGKz1ZiLrgLwAYN-hcn1zoIo7bBY.8r4Elkyws.m',
    ),
    'API_APIID' => 'APP-80W284485P519543T',
    'API_REQUEST_FORMAT' => 'XML',
    'API_RESPONSE_FORMAT' => 'XML',
    'currencyCode' => 'EUR',
    'cancelUrl' => 'http://www.bazartes.com/order/confirm?method=paypal',
    'returnUrl' => 'http://www.bazartes.com/payment/paypal_detail',
    'feesPayer' => 'RECEIVER',
    'errorLanguage' => 'pt_PT'
);