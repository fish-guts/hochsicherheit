<?php
require(ROOT_PATH."/controller/Controller.php");

class HomeController implements Controller {
	private $model = null;
	private $view = null;
	
	public function __contruct() {
		require("model/homeModel.php");
		require("lib/class.TemplateView.php");
		$this->model = new HomeModel();
		$this->view = new TemplateView("home");
	}

	public function indexAction() {
        	$entries = $this->model->getEntries();
	        $this->view->assign('entries', $entries);
	        return $this->view->render();
	}
}
