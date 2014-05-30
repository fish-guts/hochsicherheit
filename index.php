<!DOCTYPE html>
<?php
session_start();
require_once("inc/main.php.inc");
if (!isset($_GET['page'])) {
    $page = "home";
} else {
    $page = $_GET['page'];
}
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="style/style.css" />
        <title>Hoch-Sicherheit GmbH</title>
    </head>
    <body>
        <div width="100%" id="header">
            <table width="100%" class="main">
                <tr>
                    <td width="80%"><h1>Hoch-Sicherheit GmbH</h1></td>
                    <td width="20%" align="right"><img class="main" width="130px" height="130px" src="img/logo.png" alt="Logo" /></td>
                </tr>
            </table>
            <br />
            <ul id="navigation">+
                <?php
                $nav = load_navigation($page);
                echo $nav;
                ?>
            </ul>
        </div>
        <div align="center" id="container">
        <?php
            include(load_controller($page));
        ?>
        </div>
    </body>
</html>
