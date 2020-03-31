<?php
function cleanInput(string $data): string
{
    $firstClean = trim($data);
    $secondClean = ucfirst($firstClean);
    $thirdClean = htmlentities($secondClean);
    return $thirdClean;
}

function createMsg(string $nom, string $prenom, string $mail, string $message,string $tel, string $requeteReasons) : void
{
    $pdo = getPDO();
    $query = 'INSERT INTO form (lastname, firstname, mail, message, phone, reason) VALUES (:nom, :prenom, :mail, :message, :tel, :requeteReasons)';
    $statement = $pdo->prepare($query);
    $statement->bindValue(':nom', $nom, PDO::PARAM_STR);
    $statement->bindValue(':prenom', $prenom, PDO::PARAM_STR);
    $statement->bindValue(':mail', $mail, PDO::PARAM_STR);
    $statement->bindValue(':message', $message, PDO::PARAM_STR);
    $statement->bindValue(':tel', $tel, PDO::PARAM_STR);
    $statement->bindValue(':requeteReasons', $requeteReasons, PDO::PARAM_STR);
    $statement->execute();
}
function getAllMsg() : array
{
    $pdo = getPDO();
    $query = 'SELECT * FROM form';
    $statement = $pdo->query($query);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}
function getPDO() : PDO
{
    try {
        $pdo = new PDO(DSN, USER, PASS );
    } catch (PDOException $e) {
        echo 'Erreur avec PDO veuillez contacter Timo' . $e->getMessage();
        die;
    }
    return $pdo;
}
?>