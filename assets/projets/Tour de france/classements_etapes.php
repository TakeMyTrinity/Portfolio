<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/mdb.min.css">
    <link rel="stylesheet" href="taille.css">

</head>

<body>

    <?php
    try {
        $bdd = new PDO('mysql:host=db803219001.hosting-data.io;dbname=db803219001', 'dbo803219001', 'BMw1234*', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    ?>
    <div class="modal-body" id="tabs">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-etape1-tab" data-toggle="pill" href="#pills-etape1" role="tab"
                    aria-controls="pills-etape1" aria-selected="true"> Etape 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-etape2-tab" data-toggle="pill" href="#pills-etape2" role="tab"
                    aria-controls="pills-etape2" aria-selected="false">Etape 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-etape3-tab" data-toggle="pill" href="#pills-etape3" role="tab"
                    aria-controls="pills-etape3" aria-selected="false">Etape 3</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-etape4-tab" data-toggle="pill" href="#pills-etape4" role="tab"
                    aria-controls="pills-etape4" aria-selected="false">Etape 4</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-etape5-tab" data-toggle="pill" href="#pills-etape5" role="tab"
                    aria-controls="pills-etape5" aria-selected="false">Etape 5</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-etape6-tab" data-toggle="pill" href="#pills-etape6" role="tab"
                    aria-controls="pills-etape6" aria-selected="false">Etape 6</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-etape7-tab" data-toggle="pill" href="#pills-etape7" role="tab"
                    aria-controls="pills-etape7" aria-selected="false">Etape 7</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-etape8-tab" data-toggle="pill" href="#pills-etape8" role="tab"
                    aria-controls="pills-etape8" aria-selected="false">Etape 8</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-etape9-tab" data-toggle="pill" href="#pills-etape9" role="tab"
                    aria-controls="pills-etape9" aria-selected="false">Etape 9</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-etape10-tab" data-toggle="pill" href="#pills-etape10" role="tab"
                    aria-controls="pills-etape10" aria-selected="false">Etape 10</a>
            </li>
        </ul>

        <div class="tab-content" id="pills-tabContent">

            <div class="tab-pane fade show active" id="pills-etape1" role="tabpanel" aria-labelledby="pills-etape1-tab">

                <div class="d-flex justify-content-center">


                    <table class="table table-striped" style="vertical-align: middle">
                        <thead>
                            <tr>
                                <th scope="col">Position</th>
                                <th scope="col">Coureur</th>
                                <th scope="col">Equipe</th>
                                <th scope="col">Temps</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $reponse = $bdd->query('SELECT nom as Nom, prenom as Prenom, trigramme as Equipe, Temps as Temps, logo as Logo FROM Temps INNER JOIN Equipe ON Temps.Id_Equipe = Equipe.Id_Equipe INNER JOIN Cycliste ON Temps.Id_Cycliste = Cycliste.Id_Cycliste WHERE Temps.Id_Etape = 1 GROUP BY Temps.Id_Cycliste ORDER BY Temps.Temps ASC');
                            $rang = 0;
                            while ($ligne = $reponse->fetch()) :
                                $rang++;
                            ?>
                            <tr>
                                <td style="padding : 0"><?php echo $rang; ?></td>
                                <td style="padding : 0" class="w-25"><img src="<?php echo $ligne["Logo"] ?>"
                                        class="img-fluid"><?php echo $ligne["Nom"];
                                                                                                                                    echo " "; ?><?php echo $ligne["Prenom"];
                                                                                                                                echo " "; ?>
                                </td>
                                <td style="padding : 0"><?php echo $ligne["Equipe"] ?></td>
                                <td style="padding : 0"><?php echo $ligne["Temps"] ?></td>
                            </tr>

                            <?php
                            endwhile;
                            ?>

                        </tbody>
                    </table>




                </div>
            </div>

            <div class="tab-pane fade" id="pills-etape2" role="tabpanel" aria-labelledby="pills-etape2-tab">

                <div class="d-flex justify-content-center">




                    <table class="table table-striped" style="vertical-align: middle">
                        <thead>
                            <tr>
                                <th scope="col">Position</th>
                                <th scope="col">Coureur</th>
                                <th scope="col">Equipe</th>
                                <th scope="col">Temps</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $reponse = $bdd->query('SELECT nom as Nom, prenom as Prenom, trigramme as Equipe, Temps as Temps, logo as Logo FROM Temps INNER JOIN Equipe ON Temps.Id_Equipe = Equipe.Id_Equipe INNER JOIN Cycliste ON Temps.Id_Cycliste = Cycliste.Id_Cycliste WHERE Temps.Id_Etape = 2 GROUP BY Temps.Id_Cycliste ORDER BY Temps.Temps ASC');
                            $rang = 0;
                            while ($ligne = $reponse->fetch()) :
                                $rang++;
                            ?>
                            <tr>
                                <td style="padding : 0"><?php echo $rang; ?></td>
                                <td style="padding : 0" class="w-25"><img src="<?php echo $ligne["Logo"] ?>"
                                        class="img-fluid"><?php echo $ligne["Nom"];
                                                                                                                                    echo " "; ?><?php echo $ligne["Prenom"];
                                                                                                                                echo " "; ?>
                                </td>
                                <td style="padding : 0"><?php echo $ligne["Equipe"] ?></td>
                                <td style="padding : 0"><?php echo $ligne["Temps"] ?></td>
                            </tr>

                            <?php
                            endwhile;
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-etape3" role="tabpanel" aria-labelledby="pills-etape3-tab">

                <div class="d-flex justify-content-center">


                    <table class="table table-striped" style="vertical-align: middle">
                        <thead>
                            <tr>
                                <th scope="col">Position</th>
                                <th scope="col">Coureur</th>
                                <th scope="col">Equipe</th>
                                <th scope="col">Temps</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $reponse = $bdd->query('SELECT nom as Nom, prenom as Prenom, trigramme as Equipe, Temps as Temps, logo as Logo FROM Temps INNER JOIN Equipe ON Temps.Id_Equipe = Equipe.Id_Equipe INNER JOIN Cycliste ON Temps.Id_Cycliste = Cycliste.Id_Cycliste WHERE Temps.Id_Etape = 3 GROUP BY Temps.Id_Cycliste ORDER BY Temps.Temps ASC');
                            $rang = 0;
                            while ($ligne = $reponse->fetch()) :
                                $rang++;
                            ?>
                            <tr>
                                <td style="padding : 0"><?php echo $rang; ?></td>
                                <td style="padding : 0" class="w-25"><img src="<?php echo $ligne["Logo"] ?>"
                                        class="img-fluid"><?php echo $ligne["Nom"];
                                                                                                                                    echo " "; ?><?php echo $ligne["Prenom"];
                                                                                                                                echo " "; ?>
                                </td>
                                <td style="padding : 0"><?php echo $ligne["Equipe"] ?></td>
                                <td style="padding : 0"><?php echo $ligne["Temps"] ?></td>
                            </tr>

                            <?php
                            endwhile;
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-etape4" role="tabpanel" aria-labelledby="pills-etape4-tab">

                <div class="d-flex justify-content-center">


                    <table class="table table-striped" style="vertical-align: middle">
                        <thead>
                            <tr>
                                <th scope="col">Position</th>
                                <th scope="col">Coureur</th>
                                <th scope="col">Equipe</th>
                                <th scope="col">Temps</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $reponse = $bdd->query('SELECT nom as Nom, prenom as Prenom, trigramme as Equipe, Temps as Temps, logo as Logo FROM Temps INNER JOIN Equipe ON Temps.Id_Equipe = Equipe.Id_Equipe INNER JOIN Cycliste ON Temps.Id_Cycliste = Cycliste.Id_Cycliste WHERE Temps.Id_Etape = 4 GROUP BY Temps.Id_Cycliste ORDER BY Temps.Temps ASC');
                            $rang = 0;
                            while ($ligne = $reponse->fetch()) :
                                $rang++;
                            ?>
                            <tr>
                                <td style="padding : 0"><?php echo $rang; ?></td>
                                <td style="padding : 0" class="w-25"><img src="<?php echo $ligne["Logo"] ?>"
                                        class="img-fluid"><?php echo $ligne["Nom"];
                                                                                                                                    echo " "; ?><?php echo $ligne["Prenom"];
                                                                                                                                echo " "; ?>
                                </td>
                                <td style="padding : 0"><?php echo $ligne["Equipe"] ?></td>
                                <td style="padding : 0"><?php echo $ligne["Temps"] ?></td>
                            </tr>

                            <?php
                            endwhile;
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-etape5" role="tabpanel" aria-labelledby="pills-etape5-tab">

                <div class="d-flex justify-content-center">


                    <table class="table table-striped" style="vertical-align: middle">
                        <thead>
                            <tr>
                                <th scope="col">Position</th>
                                <th scope="col">Coureur</th>
                                <th scope="col">Equipe</th>
                                <th scope="col">Temps</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $reponse = $bdd->query('SELECT nom as Nom, prenom as Prenom, trigramme as Equipe, Temps as Temps, logo as Logo FROM Temps INNER JOIN Equipe ON Temps.Id_Equipe = Equipe.Id_Equipe INNER JOIN Cycliste ON Temps.Id_Cycliste = Cycliste.Id_Cycliste WHERE Temps.Id_Etape = 5 GROUP BY Temps.Id_Cycliste ORDER BY Temps.Temps ASC');
                            $rang = 0;
                            while ($ligne = $reponse->fetch()) :
                                $rang++;
                            ?>
                            <tr>
                                <td style="padding : 0"><?php echo $rang; ?></td>
                                <td style="padding : 0" class="w-25"><img src="<?php echo $ligne["Logo"] ?>"
                                        class="img-fluid"><?php echo $ligne["Nom"];
                                                                                                                                    echo " "; ?><?php echo $ligne["Prenom"];
                                                                                                                                echo " "; ?>
                                </td>
                                <td style="padding : 0"><?php echo $ligne["Equipe"] ?></td>
                                <td style="padding : 0"><?php echo $ligne["Temps"] ?></td>
                            </tr>

                            <?php
                            endwhile;
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-etape6" role="tabpanel" aria-labelledby="pills-etape6-tab">

                <div class="d-flex justify-content-center">


                    <table class="table table-striped" style="vertical-align: middle">
                        <thead>
                            <tr>
                                <th scope="col">Position</th>
                                <th scope="col">Coureur</th>
                                <th scope="col">Equipe</th>
                                <th scope="col">Temps</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $reponse = $bdd->query('SELECT nom as Nom, prenom as Prenom, trigramme as Equipe, Temps as Temps, logo as Logo FROM Temps INNER JOIN Equipe ON Temps.Id_Equipe = Equipe.Id_Equipe INNER JOIN Cycliste ON Temps.Id_Cycliste = Cycliste.Id_Cycliste WHERE Temps.Id_Etape = 6 GROUP BY Temps.Id_Cycliste ORDER BY Temps.Temps ASC');
                            $rang = 0;
                            while ($ligne = $reponse->fetch()) :
                                $rang++;
                            ?>
                            <tr>
                                <td style="padding : 0"><?php echo $rang; ?></td>
                                <td style="padding : 0" class="w-25"><img src="<?php echo $ligne["Logo"] ?>"
                                        class="img-fluid"><?php echo $ligne["Nom"];
                                                                                                                                    echo " "; ?><?php echo $ligne["Prenom"];
                                                                                                                                echo " "; ?>
                                </td>
                                <td style="padding : 0"><?php echo $ligne["Equipe"] ?></td>
                                <td style="padding : 0"><?php echo $ligne["Temps"] ?></td>
                            </tr>

                            <?php
                            endwhile;
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-etape7" role="tabpanel" aria-labelledby="pills-etape7-tab">

                <div class="d-flex justify-content-center">


                    <table class="table table-striped" style="vertical-align: middle">
                        <thead>
                            <tr>
                                <th scope="col">Position</th>
                                <th scope="col">Coureur</th>
                                <th scope="col">Equipe</th>
                                <th scope="col">Temps</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $reponse = $bdd->query('SELECT nom as Nom, prenom as Prenom, trigramme as Equipe, Temps as Temps, logo as Logo FROM Temps INNER JOIN Equipe ON Temps.Id_Equipe = Equipe.Id_Equipe INNER JOIN Cycliste ON Temps.Id_Cycliste = Cycliste.Id_Cycliste WHERE Temps.Id_Etape = 7 GROUP BY Temps.Id_Cycliste ORDER BY Temps.Temps ASC');
                            $rang = 0;
                            while ($ligne = $reponse->fetch()) :
                                $rang++;
                            ?>
                            <tr>
                                <td style="padding : 0"><?php echo $rang; ?></td>
                                <td style="padding : 0" class="w-25"><img src="<?php echo $ligne["Logo"] ?>"
                                        class="img-fluid"><?php echo $ligne["Nom"];
                                                                                                                                    echo " "; ?><?php echo $ligne["Prenom"];
                                                                                                                                echo " "; ?>
                                </td>
                                <td style="padding : 0"><?php echo $ligne["Equipe"] ?></td>
                                <td style="padding : 0"><?php echo $ligne["Temps"] ?></td>
                            </tr>

                            <?php
                            endwhile;
                            ?>

                        </tbody>
                    </table>




                </div>
            </div>

            <div class="tab-pane fade" id="pills-etape8" role="tabpanel" aria-labelledby="pills-etape8-tab">

                <div class="d-flex justify-content-center">


                    <table class="table table-striped" style="vertical-align: middle">
                        <thead>
                            <tr>
                                <th scope="col">Position</th>
                                <th scope="col">Coureur</th>
                                <th scope="col">Equipe</th>
                                <th scope="col">Temps</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $reponse = $bdd->query('SELECT nom as Nom, prenom as Prenom, trigramme as Equipe, Temps as Temps, logo as Logo FROM Temps INNER JOIN Equipe ON Temps.Id_Equipe = Equipe.Id_Equipe INNER JOIN Cycliste ON Temps.Id_Cycliste = Cycliste.Id_Cycliste WHERE Temps.Id_Etape = 8 GROUP BY Temps.Id_Cycliste ORDER BY Temps.Temps ASC');
                            $rang = 0;
                            while ($ligne = $reponse->fetch()) :
                                $rang++;
                            ?>
                            <tr>
                                <td style="padding : 0"><?php echo $rang; ?></td>
                                <td style="padding : 0" class="w-25"><img src="<?php echo $ligne["Logo"] ?>"
                                        class="img-fluid"><?php echo $ligne["Nom"];
                                                                                                                                    echo " "; ?><?php echo $ligne["Prenom"];
                                                                                                                                echo " "; ?>
                                </td>
                                <td style="padding : 0"><?php echo $ligne["Equipe"] ?></td>
                                <td style="padding : 0"><?php echo $ligne["Temps"] ?></td>
                            </tr>

                            <?php
                            endwhile;
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-etape9" role="tabpanel" aria-labelledby="pills-etape9-tab">

                <div class="d-flex justify-content-center">


                    <table class="table table-striped" style="vertical-align: middle">
                        <thead>
                            <tr>
                                <th scope="col">Position</th>
                                <th scope="col">Coureur</th>
                                <th scope="col">Equipe</th>
                                <th scope="col">Temps</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $reponse = $bdd->query('SELECT nom as Nom, prenom as Prenom, trigramme as Equipe, Temps as Temps, logo as Logo FROM Temps INNER JOIN Equipe ON Temps.Id_Equipe = Equipe.Id_Equipe INNER JOIN Cycliste ON Temps.Id_Cycliste = Cycliste.Id_Cycliste WHERE Temps.Id_Etape = 9 GROUP BY Temps.Id_Cycliste ORDER BY Temps.Temps ASC');
                            $rang = 0;
                            while ($ligne = $reponse->fetch()) :
                                $rang++;
                            ?>
                            <tr>
                                <td style="padding : 0"><?php echo $rang; ?></td>
                                <td style="padding : 0" class="w-25"><img src="<?php echo $ligne["Logo"] ?>"
                                        class="img-fluid"><?php echo $ligne["Nom"];
                                                                                                                                    echo " "; ?><?php echo $ligne["Prenom"];
                                                                                                                                echo " "; ?>
                                </td>
                                <td style="padding : 0"><?php echo $ligne["Equipe"] ?></td>
                                <td style="padding : 0"><?php echo $ligne["Temps"] ?></td>
                            </tr>

                            <?php
                            endwhile;
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-etape10" role="tabpanel" aria-labelledby="pills-etape10-tab">

                <div class="d-flex justify-content-center">


                    <table class="table table-striped" style="vertical-align: middle">
                        <thead>
                            <tr>
                                <th scope="col">Position</th>
                                <th scope="col">Coureur</th>
                                <th scope="col">Equipe</th>
                                <th scope="col">Temps</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $reponse = $bdd->query('SELECT nom as Nom, prenom as Prenom, trigramme as Equipe, Temps as Temps, logo as Logo FROM Temps INNER JOIN Equipe ON Temps.Id_Equipe = Equipe.Id_Equipe INNER JOIN Cycliste ON Temps.Id_Cycliste = Cycliste.Id_Cycliste WHERE Temps.Id_Etape = 10 GROUP BY Temps.Id_Cycliste ORDER BY Temps.Temps ASC');
                            $rang = 0;
                            while ($ligne = $reponse->fetch()) :
                                $rang++;
                            ?>
                            <tr>
                                <td style="padding : 0"><?php echo $rang; ?></td>
                                <td style="padding : 0" class="w-25"><img src="<?php echo $ligne["Logo"] ?>"
                                        class="img-fluid"><?php echo $ligne["Nom"];
                                                                                                                                    echo " "; ?><?php echo $ligne["Prenom"];
                                                                                                                                echo " "; ?>
                                </td>
                                <td style="padding : 0"><?php echo $ligne["Equipe"] ?></td>
                                <td style="padding : 0"><?php echo $ligne["Temps"] ?></td>
                            </tr>

                            <?php
                            endwhile;
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>