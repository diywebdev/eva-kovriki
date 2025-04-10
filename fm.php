<?php

session_start();

DEFINE('ROOT', realpath(dirname(__FILE__)));

print_r(ROOT);

require_once(ROOT.'/admin/config.php');
require_once(ROOT.'/admin/dbconnect.php');
require_once(ROOT.'/admin/login.php');
require_once(ROOT.'/admin/functions.php');

include"admin/modules/filemanager/index.php";

mysqli_close($link);
?>