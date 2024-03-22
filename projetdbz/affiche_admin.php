<?php 

// var_dump($_POST)
require_once('db.php');

// $name = $_POST['name'];
// $detail = $_POST['detail'];
// $image = $_POST['image'];

echo '<h1>Voici les cartes disponibles</h1>';

// REQUETE
$sql = "SELECT * FROM carte";

// PREPARATION 
$stmt = $conn->prepare($sql);

// EXECUTION
$stmt->execute();

// RESULTAT
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

// AFFICHAGE
$cards = $stmt->fetchAll();

foreach($cards as $card) {
  
  echo 
  '<div class="cardmedoc">
  <div class="cardmedicament" >
  <div class="card">
  <img src=" '. $card["image"] .' class="iperso" alt="perso" >
  <p>' . $card["name"].' </p>
  
  <p> '. $card["detail"].' </p>
  
  <div> 
  <a href="index.php?id='.$card["id"].'">detail</a>
  <a href="delete.php?id='.$card["id"].'">supprimer</a> 
  <a href="form_update.php?id='.$card["id"].'">modifier</a>
  </div>
  
  </div>
  </div>
  </div>';

  
}

?>