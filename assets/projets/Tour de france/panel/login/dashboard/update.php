<?php
try {
    $bdd = new PDO('mysql:host=db803219001.hosting-data.io;dbname=db803219001', 'dbo803219001', 'BMw1234*', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
?>

<?php
$libelle = "";
$id = "";
if (isset($_GET['id'])) {
    $id = $_GET["id"];
    if (!empty($id) && is_numeric($id)) {
        $query = "SELECT id_Equipe AS ID, nom_equipe AS Nom, trigramme AS trigramme FROM Equipe where id=$id";
        $result = $bdd->query($query);
        $data = $result->fetchAll();
        $libelle = $data[0]["ID"];
        $libelle = $data[0]["Nom"];
        $libelle = $data[0]["trigramme"];
    }
}