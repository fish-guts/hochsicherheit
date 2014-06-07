<?php

require_once(ROOT_PATH."/inc/IPage.php");

class Intern implements IPage {
    
   private $introFile = "./content/intro.txt";
   private $pageTitle = "Interner Bereich";
    
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
