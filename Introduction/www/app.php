<?php

// Démarrage de la session
session_start();

//Constantes de l'application    
define("ROOT_PATH", dirname(__DIR__));
define("VIEW_PATH", ROOT_PATH . "/vues");
define("CONTROLER_PATH", ROOT_PATH . "/controleurs");

// Récupération de la route passée en paramètre
$route = filter_input(INPUT_GET, "route") ?? "default";

// Test de l'authentification
$publicRoutes = ["login", "produit", "logout", "404"];


// Gestion des messages flash
// Récupération des messages flash
$message = $_SESSION["message"] ?? "";

// Destruction du message dans la session
unset($_SESSION["message"]);

$routes = [
    "test"      => "controleur.php",
    "contact"   => "formulaire_contact.html",
    "login"     => "login.php",
    "logout"    => "logout.php",
    "produit"   => "produit.php",
    "intro"     => "intro.php",
    "ma-photo"  =>  "upload.php",
    "person"    => "persons.php"
];

if(array_key_exists($route, $routes)) {
    $controller = $routes[$route];
} else {
    $controller = "404.html";
    $route = "404";
}
// Inclusion du controleur
//require CONTROLER_PATH . "/${routes[$route]}";
require CONTROLER_PATH . "/$controller";


?>