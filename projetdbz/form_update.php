<?php 

include('db.php');


?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@300&display=swap" rel="stylesheet">
    <title>Modification</title>   
</head>

<body>
    <!-- <header>
        <nav>
            <div class="navbar">
                <img src="image/de17217161e096ef64ad3fe00621467b-removebg-preview.png" class="logo" alt="logo">
                <a href="index.php #equipe">Présentation</a>
                <a href="index.php #Médicaments">Médicaments</a>
                <a href="index.php #box">Contact</a>
                <a href="admin.phtml">Admin</a>
                <img src="image/kin-removebg-preview.png" class="logo" alt="logo">
            </div>
            
        </nav>
    </header> -->


 <div class = formulaire >
 <h3>Modifier un médicament</h3>
    <form action="update.php?id=<?php echo $_GET['id']?> " method="post">
<input type="text" name ="id" value = "<?php echo $_GET['id']?>" hidden>
    <div>
            <label for="name">Nom</label>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="detail">Détails</label>
            <input type="text" id="detail" name="detail">
        </div>
        <div>
            <label for="image">Image</label>
            <input type="text" id="image" name="image">
        </div>
        <button type="submit">Modifier votre médicament</button>
    </div>
</form>
</div>


