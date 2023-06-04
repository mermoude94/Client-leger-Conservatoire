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
            <h2>Ajouter Professeur</h2>
        </center>    
        <form action="index.php?uc=personne&action=ajouterprof" method="POST">
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
                <div>
                    <label for="libelle" class="form-label">Instrument</label>
                    <select class="form-control" id="libelle" name="libelle">
                        <?php foreach ($instruments as $instrument): ?>
                            <option value="<?php echo $instrument["libelle"]; ?>">
                                <?php echo $instrument["libelle"]; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div>
                <label for="salaire" class="form-label">Salaire :</label>
                <input type="number" class="form-control" id="salaire" name="salaire" placeholder="Salaire" required>
            </div>

            <input type="submit" class="btn btn-primary" value="Ajouterprof">
        </form>
    </div>
</body>

</html>