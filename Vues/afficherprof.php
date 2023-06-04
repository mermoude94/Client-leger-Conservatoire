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
    <title>Conservatoire</title>
</head>

<body>
<?php include("header.php") ?>
        <center>
            <h2>Les Professeur</h2>
        </center>
    <div>
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Tel</th>
                    <th>Adresse</th>
                    <th>Instrument</th>
                    <th>Salaire</th>
                    <th>Actions</th>
                    <th></th>
                </tr>
            </thead>

                <?php

                foreach ($lesPersonnes as $personne) 
                    {
                        echo "<tr>";
                        echo "<td>" . $personne->getNOM() . "</td>";
                        echo "<td>" . $personne->getPRENOM() . "</td>";
                        echo "<td>" . $personne->getMAIL() . "</td>";
                        echo "<td>" . $personne->getTEL() . "</td>";
                        echo "<td>" . $personne->getADRESSE() . "</td>";
                        echo "<td>" . $personne->getINSTRUMENT() . "</td>";
                        echo "<td>" . $personne->getSALAIRE() . "</td>";
                        echo "<td><a href='index.php?uc=personne&action=supprimerprof&id=". $personne->getID() ."' class='btn btn-danger'>Supprimer</a></td>";
                        echo "<td><a href='index.php?uc=personne&action=editer_formprof&id=". $personne->getID() ."' class='btn btn-warning'>Modifier</a></td>";
                        echo "</tr>";
                    }

                ?>
        </table>
    </div>
</body>



</html>
