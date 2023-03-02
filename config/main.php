<?php
// Config global constant variable
$domain = $_SERVER["SERVER_NAME"];
if($_SERVER["SERVER_PORT"] != 80) {
	$domain .= ":".$_SERVER["SERVER_PORT"];
}

//session_start();

$relRoot = dirname($_SERVER['SCRIPT_NAME']);
if(substr($relRoot, -1) != "/") $relRoot .= "/"; 
define('RootURL', 'http://'.$domain.$relRoot);
define('RootABS', 'http://'.$domain.$relRoot);
define('RootREL', $relRoot);
define('RootURI', dirname($_SERVER['SCRIPT_FILENAME'])."/");
define('UploadREL', 'media/upload/');
define('UploadURI', $relRoot.UploadREL);
define('MediaREL', 'media/');
define('MediaURI', $relRoot.'media/');
define('LibsREL', 'media/libs/');
define('LibsURI', $relRoot.'media/libs/');

define('AdminPath', 'admin');
define('ControllerREL', 'controllers/');
define('ControllerAdminREL', ControllerREL."/".AdminPath);

define('DefaultImgW', 600);

// Config for database
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASSWORD','240599');
define('DB_NAME','thegioidochoi');

// Global variables
$app = [];
$app['area'] = 'users';
$app['areaPath'] = '';

$app['roles'] = [
	'1'=>'admin',
	'0'=>'user'
];

$app['recordTime'] = [
	'created'	=>	'created',
	'updated'	=>	'updated'
];

$mediaFiles = [
	'css'	=>	[],
	'js'	=>	[]
];
$obMediaFiles = $mediaFiles;
//define('OB',true);

$enableOB = false;

?>
