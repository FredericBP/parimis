<main>
    <?php
        include('pages/fr/menu2.php');
    ?>

    <section class="pageHotel">
        <!-- FIL D'ARIANE -->
        <div class="ariane">
            <p><a href="index.php?page=accueil">Accueil</a> > <a href="index.php?page=hotel">Hôtel PARIMIS</a> > Recrutement</p>
        </div>
        
        <h1>Recrutement</h1>
        <p>Vous êtes motivé à rejoindre notre équipe pour contribuer à faire vivre une expérience d'exception à nos clients de prestiges ?<br>Faites nous parvenir votre candidature en remplissant le formulaire ci-dessous.</p>
        
        <?php
            // Traitement du formulaire contact
            
            $valForm = '';
            $msgErreur = '';
            $erreurNom = '';
            $erreurPrenom = '';
            $erreurEmail = '';
            $erreurCv = '';
            $erreurLm = '';
            
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
                
                // CV
                if( isset($_POST['cv'])){
                    if(empty( $_POST['cv'])){
                        $msgErreur .= 'Le CV est obligatoire.';
                        $erreurCv = '<p class="erreur">Le CV est obligatoire.</p>';
                    }
                }
                
                // Lettre de motivation
                if( isset($_POST['lm'])){
                    if(empty( $_POST['lm'])){
                        $msgErreur .= 'La lettre de motivation est obligatoire.';
                        $erreurLm = '<p class="erreur">La lettre de motivation est obligatoire.</p>';
                    }
                }
                
                // Validation du formulaire
                if(empty($msgErreur)){
                    $valForm = 'Votre candidature a bien été prise en compte. Notre équipe vous répondra dans les meilleurs délais.';
                }
            }
            
            // Si $valForm n'est pas vide alors le formulaire est soumis et validé.
            if(!empty($valForm)){
                echo $valForm;
            } else{
        ?>

        <form action="index.php?page=recrutement" method="post" enctype="multipart/form-data">
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
                <?php echo $erreurCv; ?>
                <label for="cv">CV *</label>
                <input type="file" name="cv" id="cv" class="champ">
            </div>
            
            <div>
                <?php echo $erreurLm; ?>
                <label for="lm">Lettre de motivation *</label>
                <input type="file" name="lm" id="lm" class="champ">
            </div>
            
            <div>
                <label for="message">Informations complémentaires</label>
                <textarea name="message" placeholder="Taille du message entre 10 et 300 caractères" id="message"></textarea>
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