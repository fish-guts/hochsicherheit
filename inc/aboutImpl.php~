<?php

require_once("Ipage.php");

class About implements IPage {
    
   private $introFile = "./content/intro.txt";
   private $pageTitle = "&Uuml;ber uns";
    
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
