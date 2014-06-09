<tr>
	<td class="title">Interner Bereich<br /></td>
</tr>
<?php
require_once(ROOT_PATH."/model/filemodel.php");
require_once(ROOT_PATH."/inc/main.php.inc");
$action_path  = "inc/upload.php";

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
			$str = "<tr>".
				"<td width=\"60%\"><a class=\"main\" href=\"view/download.php?fileid=".$value['id']."\">".$value['name']."</a></td>".
				"<td width=\"10%\">[".formatSizeUnits($value['size'])."]</td>".
				"<td width=\"30%\"><a class=\"main\" href=\"inc/delete.php?fileid=".$value['id']."\">Löschen</a></td>".			
				"</tr>";
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
			$str = "<tr>".
				"<td width=\"60%\"><a class=\"main\" href=\"view/download.php?fileid=".$value['id']."\">".$value['name']."</a></td>".
				"<td width=\"10%\">[".formatSizeUnits($value['size'])."]</td>".
				"<td width=\"30%\"><a class=\"main\" href=\"inc/delete.php?fileid=".$value['id']."\">Löschen</a></td>".			
				"</tr>";
			echo $str;
		}
	?>
	</table>
	</form>
</fieldset>
</form>
