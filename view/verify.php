<?php

require_once(ROOT_PATH."/lib/recaptchalib.php");
$privatekey = "6Le23vQSAAAAAGrlDBrQy2Idd-aIXOTbIUsGUj9d";
$resp = recaptcha_check_answer($privatekey, $_SERVER["REMOTE_ADDR"], $_POST["recaptcha_challenge_field"], $_POST["recaptcha_response_field"]);


if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    header('Location: index.php?page=contact&captchafailed=true');
    exit();

} else {
	$to = "severin.mueller@gmx.net";
	$subject = "E-Mail von hochsicherheit.ch";
	$body =
		"Vorname : " . htmlspecialchars($_POST["firstName"]) . "\n" .
	        "Nachname: " . htmlspecialchars($_POST["firstName"]) . "\n" .
	        "E-Mail  : " . htmlspecialchars($_POST["email"]) . "\n" .
	        "Telefon : " . htmlspecialchars($_POST["phone"]) . "\n" .
	        "Mobile  : " . htmlspecialchars($_POST["mobile"]) . "\n" .
	        "Text    : " . htmlspecialchars($_POST["text"]);
	if (mail($to, $subject, $body)) {
        	echo "Es ist ein Fehler aufgetreten";
	} else {
        	echo "<p style=\"color:#white;font-family:Arial;size:18pt\">Vielen Dank für Ihre Nachricht. Wir werden uns so rasch als möglich um Ihr Anliegen kümmern</p>";
	}
}
?>
