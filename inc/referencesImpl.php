<?php

require_once(ROOT_PATH."/inc/IPage.php");

class References implements IPage {
    
   private $introFile = "./model/referencesData.php";
   private $pageTitle = "Referenzen";
    
    public function getPageContent() {
        $text = file_get_contents($this->introFile);
        return $text;
    }
    public function getPageTitle() {
        return $this->pageTitle;
    }
    public function setPageTitle($title) {
        $this->pageTitle = "title";
    }
}

?>
