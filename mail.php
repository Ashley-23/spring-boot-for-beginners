<?php
// Récupérer les données du formulaire
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Adresse email de destination
$to = "ashleysatchivi92@gmail.com";

// Sujet de l'email
$email_subject = $subject;

// Corps de l'email
$email_body = "Nom: $name\n";
$email_body .= "Email: $email\n";
$email_body .= "Message:\n$message";

// En-têtes de l'email
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

// Envoyer l'email
if(mail($to, $email_subject, $email_body, $headers)) {
    echo "Votre message a été envoyé avec succès.";
} else {
    echo "Erreur : Impossible d'envoyer le message.";
}
?>
