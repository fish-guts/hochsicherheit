<?php

require_once(ROOT_PATH."/inc/IPage.php");

class Home implements IPage {

    private $pageTitle = "<span class=\"bigfont\">Ohne Sicherheit ist keine Freiheit<\/span>";

    public function getPageContent() {
//        $text = "<span class=smallfont>Wilhelm von Humboldt (1767 - 1835), dt. Philosoph u. Sprachforscher, preuss. Staatsmann</span>";
	$text = "bla";
        return $text;
    }

    public function getPageTitle() {
        return $this->pageTitle;
    }

    public function setPageTitle($title) {
        $this->pageTitle = $title;
}

?>
