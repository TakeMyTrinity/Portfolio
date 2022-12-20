<!DOCTYPE html>
<html>

<head>
    <title>Site</title>
    <link rel="stylesheet" href="taille.css">
    <link rel="stylesheet" href="css/mdb.min.css">
</head>

<body>
    <?php
	try {
		$bdd = new PDO('mysql:host=db803219001.hosting-data.io;dbname=db803219001', 'dbo803219001', 'BMw1234*', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
	} catch (Exception $e) {
		die('Erreur : ' . $e->getMessage());
	}
	?>
    <br>
    <center>
        <h1>Classement des meilleurs Coureurs !</h1>
    </center>
    <br>
    <div class="col-10 mx-auto">
        <table class="table table-striped" style="vertical-align: middle">
            <thead>
                <tr>
                    <th scope="col" style="text-align: center">Rang</th>
                    <th scope="col" style="text-align: center">Coureur</th>
                    <th scope="col" style="text-align: center">Age</th>
                    <th scope="col" style="text-align: center">Equipe</th>
                    <th scope="col" style="text-align: center">Temps</th>
                    <th scope="col" style="text-align: center">Ecart</th>
                </tr>
            </thead>
            <tbody>
                <?php

				$reponse = $bdd->query('SELECT nom AS Nom, prenom AS Prenom, YEAR(CURDATE())-(YEAR(date_naissance)) AS Age, trigramme AS Equipe, logo AS Logo, 
		SEC_TO_TIME(SUM(TIME_TO_SEC(Temps))) AS Temps, SEC_TO_TIME(SUM(TIME_TO_SEC(Temps))-TIME_TO_SEC((SELECT MIN(t1.tps) FROM (SELECT SEC_TO_TIME(SUM(TIME_TO_SEC(Temps))) AS tps FROM Temps GROUP BY Id_Cycliste)t1))) AS Ecart
		FROM Cycliste INNER JOIN Equipe ON Cycliste.Id_Equipe = Equipe.Id_Equipe INNER JOIN Temps ON Cycliste.Id_Cycliste = Temps.Id_Cycliste GROUP BY Cycliste.Id_Cycliste ORDER BY Temps ASC');

				$rang = 0;
				while ($ligne = $reponse->fetch()) :
					$rang++;
				?>
                <tr>
                    <td style="padding : 0"><?php echo $rang ?></td>
                    <td style="padding : 0" class="w-25"><img src="<?php echo $ligne["Logo"] ?>" class="img-fluid"><?php echo $ligne["Nom"];
																														echo " "; ?><?php echo $ligne["Prenom"];
																																	echo " "; ?></td>
                    <td style="padding : 0"><?php echo $ligne["Age"] ?></td>
                    <td style="padding : 0"><?php echo $ligne["Equipe"] ?></td>
                    <td style="padding : 0"><?php echo $ligne["Temps"] ?></td>
                    <td style="padding : 0"><?php echo $ligne["Ecart"] ?></td>
                </tr>
                <?php
				endwhile;
				?>
            </tbody>
        </table>
    </div>
</body>

</html>