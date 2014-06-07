<form class="form" action="verify.php" method="POST" enctype="multipart/form-data">
<?php

if(htmlspecialchars($_GET['captchafailed'])==true) {
       	echo "<p style=\"color:red;font-family:Arial;size:12pt;font-weight:bold\">Ungültige Captcha Validierung. Bitte erneut versuchen</p>";
}
?>
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
	<legend>Anti-Spam</legend>
	<?php
		require_once(ROOT_PATH."/lib/recaptchalib.php");
		$publickey = "6LcZHOgSAAAAADDOrxpoM59D4WLMGqJSwPHORWm0";
		echo recaptcha_get_html($publickey);
	?>
</fieldset>
<p align="left" class="submit">
	<input type="submit" value="Senden" />
</p>
</form>
