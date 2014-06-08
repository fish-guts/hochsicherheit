<?php

ini_set('display_errors', 1);
error_reporting(~0);

require(ROOT_PATH."/controller/Controller.php");
require(ROOT_PATH."/lib/class.TemplateView.php");

class ControllerImpl implements Controller {
	private $model = null;
	private $view = null;

	function __construct($page) 	{ 
		$this->view = new TemplateView($page);

	}
	public function indexAction() {
	        return $this->view->render();
	}
}
