<?php

class TemplateView implements Template {
	private $template;

	public function __contruct($template) {
		$this->template = $template;
	}
	//override
	public function render() {
		ob_start();
		$template = "view/" .$this->template .".php";
		if(!is_file($template)) {
			return "Template not found";
		}
		include $template;
		$view = ob_get_clean();
		return $view;
	}
}
