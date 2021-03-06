<?php

require_once(ROOT_PATH."/inc/IPage.php");

class Terms implements IPage {

	private $pageTitle = "Allgemeine Geschätsbedingungen";
	private $text = "./view/termsData.php";

	public function getPageContent() {
		return file_get_contents($this->text);
	}

	public function getPageTitle() {
		return $this->pageTitle;
	}

	public function setPageTitle($title) {
		$this->pageTitle = "title";
	}
}

?>
