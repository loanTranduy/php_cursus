<?php
// se connecter à une database avec PDO "php info"
// je défini des variables

define("DB_HOST","localhost");
define("DB_NAME","ingrwf05-php");
define("DB_USER","root");
define("DB_PASSWORD","root");

// identifier ma connexion à mon serveur
// ordre important pour mysqli DB.... 
$connect = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if(!$connect = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)):
    echo "erreur de connexion : " .$connect->error;
    exit;
    else: $connect -> set_charset("utf8");
endif;

// echo "<pre>";
// print_r($connect);



