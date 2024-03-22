<?php
require_once('db.php');

// Récupération de l'ID
$id = (int) $_GET["id"]; // Conversion en entier pour plus de sécurité

// Préparation de la requête
$sql = "DELETE FROM carte WHERE id = :id";
// Préparation de la requête
$stmt = $conn->prepare($sql);

// Exécution de la requête avec l'ID comme paramètre
try {
  $stmt->execute(['id' => $id]);
  echo "Donnée supprimée avec succès.";
} catch (PDOException $e) {
  echo "Erreur lors de la suppression : " . $e->getMessage();
}

// Redirection vers la page admin.php
header('Location: admin.phtml');
?>