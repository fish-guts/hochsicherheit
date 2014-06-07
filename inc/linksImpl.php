<?php

require_once(ROOT_PATH."/inc/IPage.php");

class Links implements IPage {
    
   private $text = "./view/linksData.php";
   private $pageTitle = "Links";
    
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
