<?php

require_once(ROOT_PATH."/inc/IPage.php");

class Services implements IPage {
    
   private $pageTitle = "Dienstleistungen";
    
    public function getPageContent() {
        $text = "Wir sind für folgende Dienstleistungen für Sie da: \n\n".
	"<ul>\n".
		"<li>Bewachungen</li>\n".
		"<li>&Uuml;berwachungen</li>\n".
		"<li>Pr&auml;ventionspatroullien</li>\n".
		"<li>Eingangskontrolle</li>\n".
		"<li>Kassendienste</li>\n".
		"<li>Kontrollg&auml;nge</li>\n".
		"<li>Objektschutz</li>\n".
	"</ul>";
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
