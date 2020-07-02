<?php 

$mail = $_POST['mail'];
$name = $_POST['name'];
$objet = $_POST['objet'];
$message = $_POST['message'];
$recaptcha = $_POST['g-recaptcha-response'];

if ($recaptcha === false){
    header('Location: https://arthurl.promo-37.codeur.online/siteperso/');
} else {
mail('lafarge21@hotmail.fr', 'Formulaire de contact', $mail, $nom, $objet, $message);
}
?>