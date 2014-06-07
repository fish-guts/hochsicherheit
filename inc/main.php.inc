<?php

function load_navigation($page) {
    
    $page_home = "home";
    $key_home = "Startseite";
    $page_about = "about";
    $key_about = "&Uuml;ber uns";
    $page_services = "services";
    $key_services = "Dienstleistungen";
    $page_terms = "terms";
    $key_terms = "AGB";
    $page_refs = "references";
    $key_refs = "Referenzen";
    $page_links = "links";
    $key_links = "Links";
    $page_intern = "intern";
    $key_intern = "Intern";
    $page_contact = "contact";
    $key_contact = "Kontakt";
    
    $list = "";
    $pagelist = array(
        array($page_home,$key_home),
        array($page_about,$key_about),
        array($page_services,$key_services),
        array($page_terms,$key_terms),
        array($page_refs,$key_refs),
        array($page_links,$key_links),
        array($page_intern,$key_intern),
        array($page_contact,$key_contact)
    );
    foreach($pagelist as $value) {
        if($page==$value[0]) {
            $list = $list . "		<li><span>".$value[1]."</span></li>\n";
        } else {
            $list = $list . "		<li><a href=\"index.php?page=".$value[0]."\">".$value[1]."</a></li>\n";            
        }
    }        
    return $list;
}
?>
