<?php
require_once("fonction.php");
require_once("connec.php");
$requeteReasons = [
    "1" => 'Quelle est la raison de la requête ?',
    "2" => 'Je souhaite réserver mon trajet nocturne',
    "3" => 'Je suis coincé(e) sur le BatCub',
    "4" => 'Mon enfant est tombé à l\'eau',
    "5" => 'La ville brûle',
    "6" => 'Je sais qui est le pousseur des quais',
    "7" => 'Je m\'ennuie, la ville est trop calme' ,
];
$prenom = cleanInput($_POST['user_name']);
$nom = cleanInput($_POST['name']);
$mail = htmlentities($_POST['user_email']);
$message = cleanInput($_POST['user_message']);
$tel = intval($_POST['user_phone']);
createMsg($nom, $prenom, $mail, $message, $tel, $requeteReasons[$_POST['reasons']]);
echo $nom . ' ' . $prenom .' votre requète est : '.'</br>';
echo '"'. $message .'"'. '</br>';
echo 'Nous pouvons vous contacter à cette adresse mail : ' . $mail . '</br>';
echo 'La raison de votre requète est : "' .  $requeteReasons[$_POST['reasons']] . '"';
echo ' <br> ' . 'Si vous n\'avez reçu aucun email, c\'est que nous allons nous mettre en relation avec vous dans les plus brefs délais au :'. '<br>' . $tel ;
