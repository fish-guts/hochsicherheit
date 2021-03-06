<!DOCTYPE html>
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);
	ini_set("session.save_handle r", "files");
	session_start();
	define('ROOT_PATH', realpath(__DIR__));
	require_once(ROOT_PATH."/controller/ControllerImpl.php");
	require_once(ROOT_PATH."/inc/main.php.inc");
	
	if (!isset($_GET['page'])) {
	    $page = "home";
	} else {
	    $page = $_GET['page'];
	}
	$controller = new ControllerImpl($page);
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="style/style.css" />
        <title>Hoch-Sicherheit GmbH</title>
	<script type="text/javascript">
	// ref: http://diveintohtml5.org/detect.html
		function supports_input_placeholder()
		{
			var i = document.createElement('input');
			return 'placeholder' in i;
		}

		if (!supports_input_placeholder()) {
			var fields = document.getElementsByTagName('INPUT');
			for (var i = 0; i < fields.length; i++) {
				if (fields[i].hasAttribute('placeholder')) {
					fields[i].defaultValue = fields[i].getAttribute('placeholder');
					fields[i].onfocus = function() {
					if (this.value == this.defaultValue)
						this.value = '';
					}
					fields[i].onblur = function() {
						if (this.value == '')
							this.value = this.defaultValue;
					}
				}
			}
		}
		function updateSlider(val) {
			document.getElementById('slidervalue').value=val;
		}
	</script>
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
		<ul id="navigation">
		<?php
                	echo(load_navigation($page));
                ?>
		</ul>
	</div>
	<div align="center" id="container">
        <?php
		include($controller->indexAction()); 
        ?>
        </div>
</body>
</html>
