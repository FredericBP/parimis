<main>
    <?php
        include('pages/fr/menu2.php');
    ?>
    
    <section class="pageHotel">
        
        <!-- FIL D'ARIANE -->
        <div class="ariane">
            <p><a href="index.php?page=accueil">Accueil</a> > Newsletter</p>
        </div>
        
        <h1>Newsletter</h1>
        <p>Restez informé de toute l'actualité et des offres spéciales de l'hôtel PARIMIS en remplissant le formulaire ci-dessous.</p>
        
        <?php
            // Traitement du formulaire contact
            
            $valForm = '';
            $msgErreur = '';
            $erreurNom = '';
            $erreurPrenom = '';
            $erreurEmail = '';
            
            if(!empty($_POST)){
                // Vérification des données saisies
                
                // Nom
                if(isset($_POST['nom'])){
                    if(empty($_POST['nom'])){
                        $msgErreur .= 'Le nom est obligatoire.';
                        $erreurNom = '<p class="erreur">Le nom est obligatoire.</p>';
                    }
                }
                
                // Prénom
                if(isset($_POST['prenom'])){
                    if(empty($_POST['prenom'])){
                        $msgErreur .= 'Le prénom est obligatoire.';
                        $erreurPrenom = '<p class="erreur">Le prénom est obligatoire.</p>';
                    }
                }
                
                // E-mail
                if( isset($_POST['email'])){
                    if(empty( $_POST['email'])){
                        $msgErreur .= 'L\'adresse e-mail est obligatoire.';
                        $erreurEmail = '<p class="erreur">L\'adresse e-mail est obligatoire.</p>';
                    }
                }
                
                // Validation du formulaire
                if(empty($msgErreur)){
                    $valForm = 'Votre inscription à la newsletter a bien été prise en compte.';
                }
            }
            
            // Si $valForm n'est pas vide alors le formulaire est soumis et validé.
            if(!empty($valForm)){
                echo $valForm;
            } else{
        ?>
        
        <form action="index.php?page=newsletter" method="post">
            <div>
                <?php echo $erreurNom; ?>
                <label for="nom">Nom *</label>
                <input type="text" name="nom" id="nom" class="champ">
            </div>
            
            <div>
                <?php echo $erreurPrenom; ?>
                <label for="prenom">Prénom *</label>
                <input type="text" name="prenom" id="prenom" class="champ">
            </div>
            
            <div>
                <?php echo $erreurEmail; ?>
                <label for="email">E-mail *</label>
                <input type="email" name="email" id="email" class="champ">
            </div>
            
            <div>
                <input type="submit" value="Envoyez" class="bouton-envoi">
            </div>
            <p> * Champs obligatoires</p>
        </form>
        
        <?php
            }
        ?>
    </section>

    <?php
        include('pages/fr/aside.php');
    ?>
</main>