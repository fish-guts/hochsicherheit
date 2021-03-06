<tr>
<td class="title">Kontakt<br /></td>
</tr>
<?php
$action_path  = "index.php?page=verify";

if(isset($_GET['captchafailed'])) {
	if(htmlspecialchars($_GET['captchafailed'])==true) {
	       	echo "<p style=\"color:white;font-family:Arial;size:12pt;font-weight:bold; text-align:left\">Ungültige Captcha Validierung. Bitte erneut versuchen</p>";
	}
}
else if(isset($_GET['emailsuccess'])) {
	if(htmlspecialchars($_GET['emailsuccess'])==true) {
        	echo "<p style=\"color:white;font-family:Arial;size:18pt;text-align:left\">Vielen Dank für Ihre Nachricht. Wir werden uns so rasch als möglich um Ihr Anliegen kümmern</p>";
	}
}
?>
	<table width="100%">
		<tr>
			<td class="title">Kontakt<br /><br /></td>
		</tr>
		<tr>
			<td class="maintext">Haben Sie Fragen? Schreiben Sie uns. Wir werden uns so rasch als möglich melden.<br /><br /></td>
		</tr>
	</table>
<form class="form" action="<?php echo $action_path ?>" method="POST" enctype="multipart/form-data">
<fieldset class="form">
	<legend>Kontaktinformationen</legend>
	<p class="name">
		<input type="text" name="firstName" id="firstName" placeholder="Vorname" required/>
		<label for="name">Vorname</label>
	</p>
	<p class="name">
		<input type="text" name="lastName" id="lastName" placeholder="Nachname" required/>
		<label for="name">Nachname</label>
	</p>
	<p class="email">
		<input type="email" name="email" id="email" placeholder="mail@beispiel.ch" required/>
		<label for="email">Email-Adresse</label>
	</p>
	<p class="name">
		<input type="text" name="phone" id="phone" placeholder="+41 52 123 45 67" required/>
		<label for="email">Telefon</label>
	</p>
	<p class="name">
		<input type="text" name="mobile" id="mobile" placeholder="+41 79 123 45 67" required/>
		<label for="email">Mobil</label>
	</p>
</fieldset>
<fieldset class="form">
	<legend>Ihre Anfrage</legend>	
	<p class="text">
		<textarea name="text" placeholder="Ihre Anfrage" required/></textarea>
	</p>
</fieldset>
<fieldset class="form">
	<legend>Anti-Spam - Bitte geben Sie die angezeigten Zeichen ein:</legend>
	<?php
		require_once(ROOT_PATH."/lib/recaptchalib.php");
		$publickey = "6Le23vQSAAAAAHRs5inaiaJ0LignH-xFPGQuU6g4";
		echo recaptcha_get_html($publickey);
	?>
</fieldset>
<p align="left" class="submit">
	<input type="submit" value="Senden" />
</p>
</form>
