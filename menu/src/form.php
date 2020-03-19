<?php
$prenom = $_POST['user_name'];
$nom = $_POST['name'];
$mail = $_POST['user_mail'];
$message = $_POST['user_message'];
$reason = $_POST['reasons'];
echo 'La requète de '. $nom . ' ' . $prenom .' est : '.'</br>';
echo '"'. $message .'"'. '</br>';
echo 'Son email est : ' . $mail . '</br>';
echo 'La raison de sa requète est :' . $reason;
