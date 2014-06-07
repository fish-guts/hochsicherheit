<?php
if(isset($_SESSION["validsession"])) {
	header("location:index.php?page=intern");
}
$action_path  = "model/login.php";

?>
<tr>
<td class="title">Interner Bereich<br /></td>
</tr>
<form class="form" action="<?php echo $action_path ?>" method="POST" enctype="multipart/form-data">
<fieldset class="form">
	<legend>Login - Bitte geben Sie Ihren Benutzernamen und Ihr Passwort ein</legend>
	<p class="name">
		<input type="text" name="username" id="username" placeholder="Benutzername" required/>
		<label for="name">Benutzername</label>
	</p>
	<p class="name">
		<input type="password" name="password" id="password" placeholder="Passwort" required/>
		<label for="name">Passwort</label>
	</p>
	<p align="left" class="submit">
		<input type="submit" value="Einloggen" />
	</p>
</fieldset>

</form>
