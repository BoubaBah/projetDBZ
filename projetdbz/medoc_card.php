<?php 

// var_dump($_POST)
require_once('db.php');

// $name = $_POST['name'];
// $detail = $_POST['detail'];
// $image = $_POST['image'];


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
  '<div class="card">

  <img src=" '. $card["image"] .' class="iperso" alt="perso" >
  <p>' . $card["name"].' </p>
  
  <p> '. $card["detail"].' </p>

  </div>';

  
}

?>

<!-- <div class="card">
                        <img src="image/Senzu.webp" class="iperso" alt="perso">
                        <p>Haricot magique</p>
                    </div>
                    <div class="card">
                        <img src="image/Goku-Medicale-Machine.gif" class="iperso" alt="perso">
                        <p>Machine de soin</p>
                    </div>
                    <div class="card">
                        <img src="image/figurine-dbz-summer-gift-set-de-4-repliques-capsule-corp-9cmdragon-ball-z-removebg-preview.png" class="iperso" alt="perso">
                        <p>Capsule de soin</p>
                    </div>
                    <div class="card">
                        <img src="image/s-l1200-removebg-preview.png" class="iperso" alt="perso">
                        <p>Boules de  Cristal</p>
                    </div> -->