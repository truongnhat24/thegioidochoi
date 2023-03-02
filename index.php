<?php

include_once('config/main.php');
include_once(__DIR__.'/vendor/bootstrap/autoload.php');
//include_once(__DIR__.'/vendor/bootstrap/app.php');
include_once(__DIR__.'/vendor/bootstrap/app.php');
include_once("config/autoload.php");
$cn = isset($_GET["ctl"])? $_GET["ctl"]: "home";
if(!is_file('controllers/'.$cn.'_controller.php')) 	$cn = 'staticpages';
$c = $cn."_controller";
$controller = new about_controller();

?>