<?php

require_once("Ipage.php");
require_once("./model/homeModel.php");

class Home implements IPage {

    private $pageTitle = "Startseite";

    public function getPageContent() {
        $text = "<table width=\"100%\" >
    <tr>
        <td class=\"bigfont\" align=\"center\">Ohne Sicherheit ist keine Freiheit</td>
    </tr>
    <tr>
        <td align=\"center\" class=\"smallfont\">Wilhelm von Humboldt (1767 - 1835), dt. Philosoph u. Sprachforscher, preuss. Staatsmann</td>
    </tr>
</table>";
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
