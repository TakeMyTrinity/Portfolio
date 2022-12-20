<?php
try {
    $bdd = new PDO('mysql:host=db803219001.hosting-data.io;dbname=db803219001', 'dbo803219001', 'BMw1234*', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$sql = $bdd->prepare('DELETE FROM Equipe WHERE Id_Equipe=:num LIMIT 1');
$sql->bindValue(':num', $_GET["idequipe"], PDO::PARAM_INT);
$execIsOk = $sql->execute();
if ($execIsOk) {
    $message = "L'équipe est supprimer";
} else {
    $message = "Echec lors de la suppression";
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Suppression</h1>
    <p><?= $message ?></p>

</body>

</html>