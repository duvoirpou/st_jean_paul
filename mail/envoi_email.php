<?php
// Traitement du formulaire
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['comments']) && isset($_POST['phone'])) {
    $destinataire = "assakoprecieux@gmail.com";
    $sujet = $_POST['subject'];
    $message = $_POST['comments'] . " \nTéléphone: " . $_POST['phone'];


    $expediteur =  $_POST["email"];
    $nom = $_POST["name"];
    // Correction de l'envoi de l'email 
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= "From: " . $nom . " <" . $expediteur . ">\r\n";
    $headers .= "Reply-To: <" . $expediteur . ">\r\n";
    $headers .= "Return-Path: <" . $expediteur . ">\r\n";
    $headers .= "Sender: <" . $expediteur . ">\r\n";
    $headers .= "Message-ID: <" . time() . "@" . $_SERVER['SERVER_NAME'] . ">\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";

    if (mail($destinataire, $sujet, $message, $headers)) {
        echo '<script>alert("Email envoyée avec succès."); window.location.href="../contact.php";</script>';
    } else {
        echo 'Échec de l\'envoi de l\'email.';
    }
}

/* $to = 'assakoprecieux@gmail.com';
$subject = 'Test Email';
$message = 'This is a test email.';
$headers = 'From: webmaster@example.com';

if (mail($to, $subject, $message, $headers)) {
    echo 'Email sent successfully.';
} else {
    echo 'Failed to send email.';
} */

