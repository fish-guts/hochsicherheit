<?php

require_once(ROOT_PATH."/inc/IPage.php");

class About implements IPage {
    
	private $introFile = "./view/aboutData.php";
	private $pageTitle = "&Uuml;ber uns";
    
	public function getPageContent() {
		return file_get_contents($this->introFile);
	}
	public function getPageTitle() {
		return $this->pageTitle;
	}
	public function setPageTitle($title) {
		$this->pageTitle = "title";
	}
}

?>
