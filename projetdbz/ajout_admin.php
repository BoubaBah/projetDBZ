<?php

require_once('db.php');

$name = $_POST['name'];
$detail = $_POST['detail'];
$image = $_POST['image'];

$sql = "INSERT INTO carte (name, detail, image) VALUES (:name, :detail, :image)";
$stmt = $conn->prepare($sql);

$stmt->bindParam(':name', $name);
$stmt->bindParam(':detail', $detail);
$stmt->bindParam(':image', $image);


$stmt->execute();

header('Location: admin.phtml');