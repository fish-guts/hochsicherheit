<tr>
	<td class="title">Interner Bereich<br /></td>
</tr>
<?php
require_once(ROOT_PATH."/model/filemodel.php");
$action_path  = "../inc/upload.php";

?>
<form class="form" action="<?php echo $action_path ?>" method="POST" enctype="multipart/form-data">
<fieldset class="form">
	<legend>Datei hochladen</legend>
	<p align="left" class="submit">
		<input style="width: 250px; background-color:black; color:white; height:20px;" type="file" name="file">
		<input style="background-color:silver" type="submit" value="Hochladen">
	</p>
	<p align="left" class="formradios" width="50%">
		<label for="category">Kategorie</label>	<br />
	<input align="left" type="radio" id="category" name="category" value="1" checked required/>Dokumente<br />
		<input align="left" type="radio" id="category" name="category" value="2" />Vorschriften
	</p>
</fieldset>
<fieldset class="form">
	<legend>Dokumente</legend>
	<? 
</fieldset>
<fieldset class="form">
	<legend>Vorschriften</legend>	
	<table width="50%">
	<?php
		$file = new FileModel();
		$docs = $file->get_files("Dokumente");
		foreach($docs as $key => $value) {
			$str = "<tr>".
				"<td>".$value."</td>".
				"</tr>";
			echo $str;
		}
	?>
</fieldset>
</form>