<?php
require_once('db.php');



// Récupération des données
$id = $_POST["id"];
// $id = (int) $_GET["id"]; // Conversion en entier pour plus de sécurité

var_dump($_POST);
 // Conversion en entier pour plus de sécurité
$name = $_POST['name'];
$detail = $_POST['detail'];
$image = $_POST['image'];

$sql = "UPDATE carte SET name = :name, detail = :detail, image = :image  WHERE id = :id";
$stmt = $conn->prepare($sql);
// Bind parameters securely to prevent SQL injection
$stmt->bindParam(':name', $name, PDO::PARAM_STR);
$stmt->bindParam(':detail', $detail, PDO::PARAM_STR);
$stmt->bindParam(':image', $image, PDO::PARAM_STR);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);

$stmt->execute();

  // vérifier si la requête d'insertion a réussi
  if($stmt){
    echo 'Les données ont bien été insérés';
  }else{
    echo "Une erreur est survenue !";
  }




header('Location: admin.phtml');

// $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
// $detail = filter_input(INPUT_POST, 'detail', FILTER_SANITIZE_STRING);
// $image = filter_input(INPUT_POST, 'image', FILTER_SANITIZE_STRING);
// // etc. pour les autres champs

// // Préparation de la requête
// $sql = "UPDATE carte SET name = :name, detail = :detail, image = :image  WHERE id = :id";
// $stmt = $conn->prepare($sql);

// // Exécution de la requête avec les valeurs des champs et l'ID comme paramètres
// try {
//   $stmt->execute([
//     'name' => $name,
//     'detail' => $detail,
//     'image' => $image,
//     // etc. pour les autres champs
//     'id' => $id,
//   ]);
//   echo "Donnée modifiée avec succès.";
// } catch (PDOException $e) {
//   echo "Erreur lors de la modification : " . $e->getMessage();
// }

// Redirection vers la page admin.php

