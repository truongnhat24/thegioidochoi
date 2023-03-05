<?php
class dashboard_controller extends vendor_backend_controller {
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		//var_dump("ccccc"); exit();
		// $this->noUsers 		= (user_model::getInstance())->getCountRecords();
		// $this->noBooks 		= (book_model::getInstance())->getCountRecords();
		// $this->noProjects = (project_model::getInstance())->getCountRecords();
		// $this->noStps 		= (static_page_model::getInstance())->getCountRecords();
		$this->display();
	}
}
?>