<?php
    require_once(ROOT_PATH."/inc/aboutImpl.php");
    $page = new About();
?>
<table width="100%">
    <tr>
        <td class="bigfont"><?php echo $page->getPageTitle(); ?> </td>
    </tr>
    <tr>
        <td class="maintext" align="left" ><?php echo $page->getPageContent(); ?></td>
    </tr>
</table>
