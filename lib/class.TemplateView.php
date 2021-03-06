<?php

ini_set('display_errors', 1);
error_reporting(~0);

class TemplateView {
	private $template;

	function __construct($page) {
		$this->template = $page;
	}
	//override
	public function render() {
		ob_start();
		echo $this->template;
		$template = ROOT_PATH."/view/" . $this->template .".php";
		if(!is_file($template)) {
			return "Template not found";
		}
		include $template;
		$view = ob_get_clean();
		return $template;
	}
}
