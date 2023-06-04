<?php
require_once 'Modeles/monPdo.php';
MonPdo::checkSessionAndRedirect();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Vues/CSS/style.css" rel="stylesheet">
    <title>Conservatoire</title>
</head>

<body>

    <?php include("header.php");?>

    <div class="Titre">
        <center>
            <h2>Nos cours</h2>
        </center>
    </div>

        <table class="Tableau">
            
            <thead>
                <tr>
                    <th>Idprof</th>
                    <th>Tranche</th>
                    <th>Jour</th>
                    <th>Niveau</th>
                    <th>Capacité</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>


                <?php

                foreach ($lesSeances as $seance) {
                    echo "<tr>";
                    echo "<td>" . $seance->getIDPROF() . "</td>";
                    echo "<td>" . $seance->getTRANCHE() . "</td>";
                    echo "<td>" . $seance->getJOUR() . "</td>";
                    echo "<td>" . $seance->getNIVEAU() . "</td>";
                    echo "<td>" . $seance->getCAPACITE() . "</td>";
                    echo "<td><a href='index.php?uc=cours&action=supprimer&idseance=" . $seance -> getNUMSEANCE() . "'>Suprimer</a></td>";
                   
                }
                ?>
            </tbody>
        </table>
</body>



</html>
