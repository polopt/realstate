<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt" lang="pt">
    <head>
	<title><?php echo __('HomeAndyou ERRO')?></title>
	<meta name="keywords" content="<?php echo __('')?>"/>
	<meta name="author" content="HomeAndYou"/>
	<meta name="robots" content="nofollow,noindex"/>
	<meta name="copyright" content="HomeAndYou © 2014"/>

	<meta name="language" content="Portuguese"/>
	<meta name="country" content="Portugual"/>
	<meta name="description" content="<?php echo __('HomeAndYou')?>"/>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!--        <meta name="verify-v1"          content="E0YVVffgwxO8D8thVvOTGyrRgpJmtH543xZy62IQj+8=" />-->

<!--	<link type="text/css" href="/media/css/main.css" rel="stylesheet" media="screen" />-->
	<script type="text/javascript" src="/media/js/jquery.min.js"></script>

	<link rel="alternate" type="application/rss+xml" title="<?php echo __('CMStatus')?>" href="/rss" />
	<link rel="shortcut icon" href="/favicon.ico"/>
    </head>
    <body>
        <div id="main_container">
            <div id="global_header">
                <div id="top_container"></div>

                <div id="main_menu_container">
                </div>
            </div>
            <div id="global_body">
                <div id="error_box">
                    <div id="error_code"><?php echo __('Erro :code',array(':code'=>$code))?></div>
                    <div id="error_message"><?php echo $message ?></div>
                    <h1><a href="http://www.HomeAndYou.pt" title="www.HomeAndYou.pt">www.HomeAndYou.pt</a></h1>
                </div>
            </div>
            <div id="global_footer">
                <div id="footer"></div>
            </div>
        </div>
    </body>
</html>

