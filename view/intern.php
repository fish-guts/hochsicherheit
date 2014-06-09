<?php
require_once(ROOT_PATH."/model/filemodel.php");
require_once(ROOT_PATH."/inc/main.php.inc");
$action_path  = "inc/upload.php";

?>
	<table width="100%">
		<tr>
			<td class="title">Interner Bereich<br /><br /></td>
		</tr>
	</table>
<?php
if(isset($_GET['uploadsuccess'])) {
	if(htmlspecialchars($_GET['uploadsuccess'])==true) {
        	echo "<p style=\"color:white;font-family:Arial;size:18pt;text-align:left\">Datei erfolgreich hochgeladen. </p>";
	}
}
?>
	<form class="form" action="<?php echo $action_path ?>" method="POST" enctype="multipart/form-data">
	<fieldset class="form">
		<legend>Datei hochladen</legend>
		<p align="left" class="submit">
			<input style="width: 250px; background-color:black; color:white; height:20px;" type="file" name="userfile">
			<input style="background-color:silver" name="upload" id="upload" type="submit" value="Hochladen">
		</p>
		<p align="left" class="formradios" width="50%">
			<label for="category">Kategorie</label>	<br />
		<input align="left" type="radio" id="category" name="category" value="1" checked required/>Dokumente<br />
			<input align="left" type="radio" id="category" name="category" value="2" />Vorschriften
		</p>
	</fieldset>
	<fieldset class="form">
		<legend>Informationen</legend>
		<form action="" method="GET">
			<table width="100%">
			<?php
				$file = new FileModel();
				$docs = $file->get_files("Informationen");
				foreach($docs as $key => $value) {
					$str = "	<tr>\n".
				"					<td width=\"60%\"><a class=\"main\" href=\"view/download.php?fileid=".$value['id']."\">".$value['name']."</a></td>\n".
				"					<td width=\"10%\">[".formatSizeUnits($value['size'])."]</td>\n".
				"					<td width=\"30%\"><a class=\"main\" href=\"inc/delete.php?fileid=".$value['id']."\">Löschen</a></td>\n".			
				"				</tr>\n";
			echo $str;
		}
	?>
			
			</table>
		</form>
	</fieldset>
	<fieldset class="form">
		<legend>Vorschriften</legend>
		<form action="" method="GET">
			<table width="100%">
			<?php
				$file = new FileModel();
				$docs = $file->get_files("Vorschriften");
				foreach($docs as $key => $value) {
					$str = "	<tr>\n".
				"					<td width=\"60%\"><a class=\"main\" href=\"view/download.php?fileid=".$value['id']."\">".$value['name']."</a></td>\n".
				"					<td width=\"10%\">[".formatSizeUnits($value['size'])."]</td>\n".
				"					<td width=\"30%\"><a class=\"main\" href=\"inc/delete.php?fileid=".$value['id']."\">Löschen</a></td>\n".			
				"				</tr>\n";
			echo $str;
		}
	?>
			
			</table>
		</form>
	</fieldset>	</form>
