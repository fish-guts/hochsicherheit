<?php

require_once(ROOT_PATH."/inc/IPage.php");

class References implements IPage {
    
   private $text = "./view/referencesData.php";
   private $pageTitle = "Referenzen";
    
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
