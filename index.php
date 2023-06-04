<?php

ini_set('session.cookie_lifetime', 86400); // Durée de vie des cookies de session en secondes
ini_set('session.gc_maxlifetime', 86400);
session_start();

include "Modeles/monPdo.php";
include "Modeles/personne.class.php" ;
include "Controleurs/login_controller.php" ;
include "Modeles/cours.class.php" ;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (empty($_GET["uc"])) {
    $uc = "accueil_login";
} else {
    $uc = $_GET["uc"];
}

$loginController = new LoginController();

switch ($uc) {
    case "accueil_login" :
        $uc = $_POST['uc'] ?? 'default';
        $action = $_POST['action'] ?? 'default';
    
        if ($uc === 'login' && $action === 'submit') {
            $loginController = new LoginController();
            $loginController->login();
            exit;
        } elseif ($uc === 'default') {
            header('Location: index.php?uc=login');
            exit;
        }

    case "login":
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $loginController->login();
        } else {
            $loginController->show();
        }
        break;

    case "accueil";
        include("Vues/accueil.php");
        break;

    case "personne":
        include("Controleurs/controleurPersonnes.php");
        break;

    case "cours":
        include("Controleurs/controleurCours.php");
        break;

    case "Admin":
        include "Controleurs/controleurAdmin.php";
        break;

    case "eleve";
        include("Controleurs/controleurEleve.php");
        break;

    case "logout":
        $loginController->logout();
        include("Vues/login_view.php");
        break;

    case "ajouter":
        include("Vues/ajoutereleve.php");
        break;

    case "redirlogin":
        include("Vues/login_view.php");
        break;


}
