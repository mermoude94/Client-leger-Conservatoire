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


    <div class="AjouterEleve">
        <center>
            <h2>Ajouter un cour</h2>
        </center>
        <form action="index.php?uc=cours&action=ajouter" method="post">

                    <label for="idprof" class="form-label">Prof</label>
                    <select class="form-control" id="idprof" name="idprof">
                        <?php foreach ($profs as $prof): ?>
                            <option value="<?php echo $prof["idprof"]; ?>">
                                <?php echo $prof["nom"]; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>

                    <label for="tranche" class="form-label">Horaire</label>
                    <select class="form-control" id="tranche" name="tranche">
                        <?php foreach ($heures as $heure): ?>
                            <option value="<?php echo $heure["tranche"]; ?>">
                                <?php echo $heure["tranche"]; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>

                    <label for="jour" class="form-label">Jour</label>
                    <select class="form-control" id="jour" name="jour">
                        <?php foreach ($jours as $jour): ?>
                            <option value="<?php echo $jour["jour"]; ?>">
                                <?php echo $jour["jour"]; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>

                <label for="niveau" class="form-label">Niveau :</label>
                <select class="form-control" id="niveau" name="niveau" required>
                    <option value="">Niveau</option>
                    <option value="1">Débutant</option>
                    <option value="2">Moyen</option>
                    <option value="3">Avancé</option>
                </select>

                <label for="capacite" class="form-label">Capacité :</label>
                <input type="number" class="form-control" id="capacite" name="capacite" required>
            <input type="submit" class="btn btn-primary" value="Ajouter">
        </form>
    </div>
</body>

</html>
