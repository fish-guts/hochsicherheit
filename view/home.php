<?php
ini_set('display_errors', 1);
error_reporting(~0);
    require_once(ROOT_PATH."/inc/homeImpl.php");
    $page = new Home();
?>
<table width="100%">
    <tr>
        <td class="bigfont"><?php echo $page->getPageTitle(); ?> </td>
    </tr>
    <tr>
        <td class="maintext" align="left" ><?php echo $page->getPageContent(); ?></td>
    </tr>
</table>
