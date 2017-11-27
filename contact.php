<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
	$company = $_POST['company'];
    $message = $_POST['message'];
    $from = 'From: Gebruiker'; 
    $to = '21897@ma-web.nl'; 
    $subject = 'Email van websitebezoeker';
			
    $body = "From: $name\nE-Mail: $email\nCompany: $company\nMessage:\n $message";
				
if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) { 
		header("Location: index.php");
    } else { 
        echo '<p>Er is iets fout gegaan, probeer het opnieuw!</p>'; 
    }
}
?>