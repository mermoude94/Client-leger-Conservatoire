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

    <link href="Vues/CSS/style.css" rel="stylesheet">
</head>

<body>
    <?php include("header.php") ?>

    <div class="">
        <center>
            <h2>Ajouter eleve</h2>
        </center>
        <form action="index.php?uc=personne&action=ajouter" method="POST">
            <div>
                <label for="nom" class="form-label">Nom :</label>
                <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom" required>
            </div>
            <div>
                <label for="prenom" class="form-label">Prénom :</label>
                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prénom" required>
            </div>
            <div>
                <label for="mail" class="form-label">mail :</label>
                <input type="mail" class="form-control" id="mail" name="mail" placeholder="Mail" required>
            </div>
            <div>
                <label for="tel" class="form-label">Téléphone :</label>
                <input type="text" class="form-control" id="tel" name="tel" placeholder="Tel" required>
            </div>

            <div>
                <label for="adress" class="form-label">Adresse :</label>
                <input type="text" class="form-control" id="adress" name="adress" placeholder="Adresse" required>
            </div>

            <div>
                <label for="niveau" class="form-label">Niveau :</label>
                <select class="form-control" id="niveau" name="niveau" required>
                    <option value="">Niveau</option>
                    <option value="1">Débutant</option>
                    <option value="2">Moyen</option>
                    <option value="3">Avancé</option>
                </select>
            </div>

            <div>
                <label for="bourse" class="form-label">Bourse :</label>
                <select class="form-control" id="bourse" name="bourse" required>
                    <option value="">Selectionner si payée ou impayée</option>
                    <option value="1">Payée</option>
                    <option value="0">Impayée</option>
                </select>
            </div>

            <input type="submit" class="btn btn-primary" value="Ajouter">
        </form>
    </div>
</body>

</html>