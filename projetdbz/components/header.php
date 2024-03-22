<?php
date_default_timezone_set('EUROPE/Paris');
setlocale(LC_TIME, 'fr_FR.utf8', 'fra');

include dirname(__DIR__) . ('/config/autoload.php');

if(empty(session_id())) {
    session_start();
}

$domaine = 'http://localhost/projetdbz/';

$indexPage = $domaine;
$equipePage = $domaine . 'equipe.php';
$medicamentPage = $domaine . 'medicament.php';
$contactPage = $domaine . 'contact.php';
$adminPage = $domaine . 'admin.php';

$indexName = 'Bienvenu';
$equipeName = 'Qui sommes nous ?';
$medicamentName = 'Nos médicaments';
$contactName = 'Contactez nous';
$adminName = 'Panel Admin';

$currentUrl = $_SERVER['SCRIPT_NAME'];

if (strpos($indexPage,$currentUrl) !== false || strpos($indexPage . 'index.php',$currentUrl) !== false) {
    $title = $indexName;
} elseif(strpos($equipePage,$currentUrl) !== false) {
    $title = $equipeName;
} elseif(strpos($medicamentPage,$currentUrl) !== false) {
    $title = $medicamentName;
} elseif(strpos($contactPage,$currentUrl) !== false) {
    $title = $contactName;
} elseif(strpos($adminPage,$currentUrl) !== false) {
    $title = $adminName;
}



?>


<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@300&display=swap" rel="stylesheet">
    <title><?= $title ?></title>   
</head>

<body>
 <header>
    <nav>
        <div class="navbar">
            <img src="image/de17217161e096ef64ad3fe00621467b-removebg-preview.png" class="logo" alt="logo">
            <a href="#equipe">Présentation</a>
            <a href="#médicaments">Médicaments</a>
            <a href="#box">Contact</a>
            <a href="admin.phtml">Admin</a>
            <img src="image/kin-removebg-preview.png" class="logo" alt="logo">
        </div>

    </nav>
 </header>

 <h1><?= $title ?></h1> 