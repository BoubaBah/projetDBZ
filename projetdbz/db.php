<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "contactdbz";

try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
  ));

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Connexion établie avec succès"; 
  
  // Configurer les erreurs PDO pour être gérées comme des exceptions
} catch(PDOException $e) {

  echo "La connexion à la base de données a échoué: " . $e->getMessage();
}
?>