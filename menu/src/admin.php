<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
require_once("fonction.php");
require_once("connec.php");
$messages = getAllMsg();
?>
<table>
    <thead>
    <tr>
        <th>
            Nom
        </th>
        <th>
            Prenom
        </th>
        <th>
            Mail
        </th>
        <th>
            Message
        </th>
        <th>
           Telephone
        </th>
        <th>
            Requete
        </th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($messages as $message) : ?>
    <tr>
        <td>
                <?= $message['lastname'] ?>
        </td>
        <td>
            <?= $message['firstname'] ?>
        </td>
        <td>
            <?= $message['mail'] ?>
        </td>
        <td>
            <?= $message['message'] ?>
        </td>
        <td>
            <?= $message['phone'] ?>
        </td>
        <td>
            <?= $message['reason'] ?>
        </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
