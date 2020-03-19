<?php
$requeteReasons = [
    "1" => 'Quelle est la raison de la requête ?',
    "2" => 'Je souhaite réserver mon trajet nocturne',
    "3" => 'Je suis coincé(e) sur le BatCub',
    "4" => 'Mon enfant est tombé à l\'eau',
    "5" => 'La ville brûle',
    "6" => 'Je sais qui est le pousseur des quais',
    "7" => 'Je m\'ennuie, la ville est trop calme' ,
];
$prenom = $_POST['user_name'];
$nom = $_POST['name'];
$mail = $_POST['user_mail'];
$message = $_POST['user_message'];
echo 'La requète de '. $nom . ' ' . $prenom .' est : '.'</br>';
echo '"'. $message .'"'. '</br>';
echo 'Son email est : ' . $mail . '</br>';
echo 'La raison de sa requète est :' . $requeteReasons[$_POST['reasons']];
