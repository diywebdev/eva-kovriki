<?php
//ini_set('display_errors', 1);

ini_set("max_file_uploads",100);

if(stristr($_SERVER['HTTP_USER_AGENT'], "Googlebot")){

	$fp = fopen("log.txt", "a+");
	fputs($fp, "[".date("H:i:s d.m.Y")."] [".$_SERVER['REQUEST_URI']."] [".$_SERVER['HTTP_USER_AGENT']."]\r\n");
	fclose($fp);

}

if(stristr($_SERVER['HTTP_USER_AGENT'], "Yandexbot")){

	$fp = fopen("ylog.txt", "a+");
	fputs($fp, "[".date("H:i:s d.m.Y")."] [".$_SERVER['REQUEST_URI']."] [".$_SERVER['HTTP_USER_AGENT']."]\r\n");
	fclose($fp);

}

    if(stristr($_SERVER["REQUEST_URI"], "sitemap")){

    header("Content-type:text/xml; charset=utf-8");
       

       
        include_once 'update2/config.php';
        include_once 'update2/sitemap.php';
        

        exit;
    }
    
header('Content-Type: text/html; charset=utf-8');


include_once 'config.php';
include_once 'update2/connect.php';

include_once 'route.php';

include_once 'classes/mysqldb.php';
require_once 'classes/image.php';
require_once 'classes/Twig/Autoloader.php';
require 'classes/mail/src/Exception.php';
require 'classes/mail/src/PHPMailer.php';
require 'classes/mail/src/SMTP.php';
require 'classes/mail.php';

require_once 'classes/controller.php';
require_once 'classes/model.php';
require_once 'classes/view.php';





Route::start();

?>