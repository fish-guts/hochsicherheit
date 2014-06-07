<tr>
<td class="title">Interner Bereich<br /></td>
</tr>
<?php
$action_path  = "index.php?page=login";

?>
<form class="form" action="<?php echo $action_path ?>" method="POST" enctype="multipart/form-data">
<fieldset class="form">
	<legend>Login - Bitte geben Sie Ihren Benutzernamen und Ihr Passwort ein</legend>
	<p class="name">
		<input type="text" name="firstName" id="firstName" placeholder="Vorname" required/>
		<label for="name">Benutzername</label>
	</p>
	<p class="name">
		<input type="password" name="lastName" id="lastName" placeholder="Nachname" required/>
		<label for="name">Passwort</label>
	</p>
	<p align="left" class="submit">
		<input type="submit" value="Einloggen" />
	</p>	
</fieldset>

</form>
