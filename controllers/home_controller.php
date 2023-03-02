<?php
class home_controller extends vendor_main_controller
{
	protected home_model $home;
	public function __construct()
	{
		$this->home = home_model::getInstance();
		parent::__construct();
	}

	public function index()
	{
		$this->categories = $this->home->getCategory();
		$this->display();
	}
}
