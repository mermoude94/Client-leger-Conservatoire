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
<?php include("header.php") ?>
        <center>
            <h2>Les eleves</h2>
        </center>
        <table class="Tableau">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Tel</th>
                    <th>Niveau</th>
                    <th>Bourse</th>
                    <th>Actions</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($lesPersonnes as $personne) 
                    {
                        echo "<tr>";
                        echo "<td>" . $personne->getNOM() . "</td>";
                        echo "<td>" . $personne->getPRENOM() . "</td>";
                        echo "<td>" . $personne->getMAIL() . "</td>";
                        echo "<td>" . $personne->getTEL() . "</td>";
                        echo "<td>" . $personne->getNIVEAU() . "</td>";
                        echo "<td>" . $personne->getBOURSE() . "</td>";
                        echo "<td><a href='index.php?uc=personne&action=supprimer&id=". $personne->getID() ."'>Supprimer</a></td>";
                        echo "<td><a href='index.php?uc=personne&action=editer_form&id=". $personne->getID() ."' class='btn btn-warning'>Modifier</a></td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>

</body>



</html>
