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

    <div class="Presentation">    
        <h1>
            <center>
                Bonjour et bienvenue sur l'intranet du conservatoire
            </center>
        </h1>
    </div>

</body>

</html>
