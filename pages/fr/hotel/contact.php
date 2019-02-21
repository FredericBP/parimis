<main>
    <?php
        include('pages/fr/menu2.php');
    ?>

    <section class="pageHotel">
        <!-- FIL D'ARIANE -->
        <div class="ariane">
            <p><a href="index.php?page=accueil">Accueil</a> > <a href="index.php?page=hotel">Hôtel PARIMIS</a> > Contact</p>
        </div>
        
        <h1>Contactez-nous</h1>
        <p>Vous pouvez simplement prendre contact avec notre équipe en remplissant le formulaire ci-dessous. Nous ferons tout notre possible pour répondre à votre demande dans les plus bref délais.</p>
        
        <?php
            // Traitement du formulaire contact
            
            $valForm = '';
            $msgErreur = '';
            $erreurNom = '';
            $erreurPrenom = '';
            $erreurEmail = '';
            $erreurSujet = '';
            $erreurMessage = '';
            
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
                
                // Sujet
                if( isset($_POST['sujet'])){
                    if(empty( $_POST['sujet'])){
                        $msgErreur .= 'Le sujet du message est obligatoire.';
                        $erreurSujet = '<p class="erreur">Le sujet est obligatoire.</p>';
                    }
                }
                
                // Message
                if(isset($_POST['message'])){
                    if(empty($_POST['message']) || strlen($_POST['message']) < 10 || strlen($_POST['message']) > 300 ){
                        $msgErreur .= 'Le message doit comprendre entre 10 et 300 caractères.';
                        $erreurMessage = '<p class="erreur">Le message doit comprendre entre 10 et 300 caractères.</p>';
                    }
                }
                
                // Validation du formulaire
                if(empty($msgErreur)){
                    $valForm = 'Votre demande a bien été prise en compte. Notre équipe vous répondra dans les meilleurs délais.';
                }
            }
            
            // Si $valForm n'est pas vide alors le formulaire est soumis et validé.
            if(!empty($valForm)){
                echo $valForm;
            } else{
        ?>
        
        <form action="index.php?page=contact" method="post">
            <div>
                <?php echo $erreurNom; ?>
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" class="champ">
            </div>
            
            <div>
                <?php echo $erreurPrenom; ?>
                <label for="prenom">Prénom</label>
                <input type="text" name="prenom" id="prenom" class="champ">
            </div>
            
            <div>
                <label for="entreprise">Entreprise</label>
                <input type="text" name="entreprise" id="entreprise" class="champ">
            </div>
            
            <div>
                <?php echo $erreurEmail; ?>
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" class="champ">
            </div>
            
            <div>
                <label for="pays">Pays</label>
                <input type="text" name="pays" id="pays" class="champ">
            </div>
            
            <div>
                <?php echo $erreurSujet; ?>
                <label for="sujet">Sujet</label>
                <input type="text" name="sujet" id="sujet" class="champ">
            </div>
            
            <div>
                <label for="categorie">Catégorie</label>
                <select name="pays" id="categorie" class="champ">
                    <option value="chambre">Chambre</option>
                    <option value="restaurant">Restaurant</option>
                    <option value="spa">SPA</option>
                    <option value="general">Ordre Général</option>
                </select>
            </div>
            
            <div>
                <?php echo $erreurMessage; ?>
                <label for="message">Message</label>
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