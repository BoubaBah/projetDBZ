<?php
include 'components/header.php';
?>

 <div class="main">
    <div class="baniere">
     </div>

     <div class="reste">
        <div class="pesentation">
            <h2>Qui somme nous ?</h2>
            <p>
                Nous sommes l'équipe médicale inspirée par l'univers de Dragon Ball. Notre équipe, désormais connue sous le nom de "Guérier Z", est composée de professionnels de la santé dévoués et compétents, prêts à relever tous les défis médicaux qui se présentent à nous. Comme nos héros préférés, nous sommes déterminés à protéger la vie et à surmonter toutes les adversités qui se dressent sur le chemin de la guérison 
            </p>
         </div>
         <div id="equipe">
            <h2>Notre Equipe</h2>
            <div class="pack">
                <div class="card">
                    <img src="image/20585.webp" class="iperso" alt="perso">
                    <p>Directeur de L’Hopitale/Pharmatie</p>
                </div>
                <div class="card">
                    <img src="image/Bulma-_DBZ_.png" class="iperso" alt="perso">
                    <p>Directeur de L’Hopitale/Pharmatie</p>
                </div>
            </div>
        
            <div class="pack">
                <div class="card">
                    <img src="image/Dende.png" class="iperso" alt="perso">
                    <p>Médecin Généraliste</p>
                </div>
                <div class="card">
                    <img src="image/Dr_Gero.png" class="iperso" alt="perso">
                    <p>Directeur secteur chirurgie</p>
                </div>
                <div class="card">
                    <img src="image/Trunks-Dragon-Ball.webp" class="iperso" alt="perso">
                    <p>Directeur secteur immagerie</p>
                </div>
            </div>
        
            <div class="pack">
                <div class="card">
                    <img src="image/goku.png" class="iperso" alt="perso">
                    <p>Infirmier</p>
                </div>
                <div class="card">
                    <img src="image/Gohan-icon.png" class="iperso" alt="perso">
                    <p>Infirmier</p>
                </div>
                <div class="card">
                    <img src="image/téléchargement.png" class="iperso" alt="perso">
                    <p>Infirmier</p>
                </div>
                <div class="card">
                    <img src="image/krillin.png" class="iperso" alt="perso">
                    <p>Infirmier</p>
                </div>
            </div>
            
            
         </div>
         <div id="Médicaments">
            <h2>Nos Soins</h2>
        
            <div class="medoc">
                <img src="image/c18-removebg-preview.png" alt="c18">
                <div class="medicament" >
                    
                <?php include 'medoc_card.php'; ?>

                </div>
               
            
                <img src="image/c21-removebg-preview.png" alt="c21">
            </div>
        
           
            
         </div>

         <div id="box">

            <div class="contact">
                <h1 class="title title-1">Contact</h1>
        
                <form class="form" action="ajout_formulaire.php" method="post">
                    <div class="form__group">
                        <input type="text" id="nom" name="name" class="form__input" placeholder="Votre Nom" required>
                        <label for="nom" class="form__label">Votre Nom</label>
                    </div>
                    <div class="form__group">
                        <input type="email" id="email" name="email" class="form__input" placeholder="Votre Email" required>
                        <label for="email" class="form__label">Votre Email</label>
                    </div>
                    <div class="form__message">
                        <label for="message" class="form__label"></label>
                        <textarea type="text" name="message" id="message" cols="30" rows="10" class="form__input message__input" required></textarea>
                    </div>
        
                    <div class="submit">
                        <button type="submit"class="submitBtn">Envoyer</button>
                    </div>
                </form>
            </div>

         </div>
         

     </div>

 </div>

 <footer>

    <a href="">Nos Horaires</a>
    <a href="">Lien utiles</a>
    <a href="">A propos</a>

 </footer>

</body>
</html>