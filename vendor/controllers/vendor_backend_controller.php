<?php
class vendor_backend_controller extends vendor_crud_controller {
	public function __construct() {
		//var_dump("cccccc"); exit();
		$this->checkRole();
		parent::__construct();
	}

	public function checkRole() {
		global $app;
		$this->checkAuth();
		$rolesFlip = array_flip($app['roles']);
		if (!isset($_SESSION['auth']['roles']) || $_SESSION['auth']['roles']!=$rolesFlip["admin"]) {
			//$_SESSION['flasherror'] = "This page not exist or you don't have permission for this page!";
			$_SESSION['flasherror'] = "This page not exist!";
			header( "Location: ".vendor_app_util::url(array('ctl'=>'dashboard')));
			exit;
		}
	}
}
?>