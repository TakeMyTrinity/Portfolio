<?php
try {
    $bdd = new PDO('mysql:host=db803219001.hosting-data.io;dbname=db803219001', 'dbo803219001', 'BMw1234*', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
?>
<?php
$message = '';
if (isset($_POST["Nom"]) && isset($_POST["trigramme"])) {
    $name = $_POST["Nom"];
    $tri = $_POST["trigramme"];

    $sql = 'INSERT INTO Equipe(nom_equipe, trigramme) VALUES(:nom_equipe, :trigramme)';
    $statement = $bdd->prepare($sql);
    if ($statement->execute([':nom_equipe' => $name, ':trigramme' => $tri])) {
        $message = 'data insert success';
        header("Location: index.php");
    } else {
        $message = 'failed to insert';
        header("Location: index.php");
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="../style.css">

    <title>Tour de France - Login Page</title>
</head>
<div class="card-body">
    <?php if (empty($message)) : ?>
    <div class="alert alert-success">
        <?= $message; ?>
    </div>

    <?php endif; ?>

    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Connection</p>
            <div class="input-group">
                <label for="name">Nom</label>
                <input type="text" name="Nom" id="Nom" class="form-control">
            </div>
            <div class="input-group">
                <label for="name">trigramme</label>
                <input type="text" name="trigramme" id="trigramme" class="form-control">
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Ajouter</button>
            </div>
    </div>
</div>
</div>
</div>

</html>