<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$subject = $_POST["subject"];
	$message = $_POST["message"];

	$to = "kareemwaleed1990@gmail.com"; // replace with your email address
	$headers = "From: $email";

	if (mail($to, $subject, $message, $headers)) {
		echo "Thank you for contacting us, $name. We will get back to you soon!";
	} else {
		echo "Oops! Something went wrong. Please try again later.";
	}
}
?>