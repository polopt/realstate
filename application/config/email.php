<?php
/**
 * Config de email
 *
 * @category  PracticalWay
 * @package   Orzare
 * @author    DevTeam <developers@practicalway.eu>
 * @copyright 2009 PracticalWay Software Portugal, SA
 */


/**
 * SwiftMailer driver, used with the email helper.
 *
 * @see http://www.swiftmailer.org/wikidocs/v3/connections/nativemail
 * @see http://www.swiftmailer.org/wikidocs/v3/connections/sendmail
 * @see http://www.swiftmailer.org/wikidocs/v3/connections/smtp
 *
 * Valid drivers are: native, sendmail, smtp
 *
 */

defined('SYSPATH') OR die('No direct access allowed.');

return array(

	'driver'        => 'native',
	'options'       => null,        

);

