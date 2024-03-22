<?php

require_once('db.php');



if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $nom = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    
    
$sql = "INSERT INTO contact (nom, email, message) VALUES (:nom, :email, :message)";
$stmt = $conn->prepare($sql);

$stmt->bindParam(':nom', $nom);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':message', $message);


$stmt->execute();
} 


// <!-- <div class="submit" action="index.php">
// <button class="submitBtn">Envoyer</button>
// </div> -->