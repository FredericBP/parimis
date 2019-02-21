<main>
    <?php
        include('pages/fr/menu2.php');
    ?>

    <section>
        <!-- FIL D'ARIANE -->
        <div class="ariane">
            <p><a href="index.php?page=accueil">Accueil</a> > <a href="index.php?page=chambres">Chambres & Suites</a> > Suite</p>
        </div>
        
        <!-- CARROUSEL PAGE CHAMBRE -->
        <div class="s-wrap s-type-1 s-suite" role="slider" aria-valuenow="4" aria-valuemin="1" aria-valuemax="10">
            <input type="radio" id="s-1" name="slider-control" checked="checked">
            <input type="radio" id="s-2" name="slider-control">
            <input type="radio" id="s-3" name="slider-control">
            <input type="radio" id="s-4" name="slider-control">
            <ul class="s-content">
                <li class="s-item s-item-1"></li>
                <li class="s-item s-item-2"></li>
                <li class="s-item s-item-3"></li>
                <li class="s-item s-item-4"></li>
            </ul>
            <div class="s-control">
                <label class="s-c-1" for="s-1"></label>
                <label class="s-c-2" for="s-2"></label>
                <label class="s-c-3" for="s-3"></label>
                <label class="s-c-4" for="s-4"></label>
            </div>
            <div class="s-nav">
                <label class="s-nav-1 left" for="s-4"></label>
                <label class="s-nav-1 right" for="s-2"></label>
                <label class="s-nav-2 left" for="s-1"></label>
                <label class="s-nav-2 right" for="s-3"></label>
                <label class="s-nav-3 left" for="s-2"></label>
                <label class="s-nav-3 right" for="s-4"></label>
                <label class="s-nav-4 left" for="s-3"></label>
                <label class="s-nav-4 right" for="s-1"></label>
            </div>
        </div>
        
        <div class="description">
            <h1>Suite</h1>
            <p>Un lieu unique, une vue unique. Vivez une expérience exceptionnelle sur la terrasse privée de la Suite offrant une vue inouïe sur la Seine. Détendez-vous dans un jacuzzi chauffé sur la terrasse. Relaxez-vous sur les bains de soleil au milieu d'un petit jardin à la Parisienne.</p>
            <p>A partir de 600€/nuit</p>
        </div>
        <div class="services">
            <h2>SERVICES & ÉQUIPEMENTS</h2>
            <ul>
                <li>2 personnes</li>
                <li>1 Lit Double de taille King-Size</li>
                <li>83m²</li>
                <li>Couettes et oreillers en duvet d'oie et luxueux linge de lit</li>
                <li>Air conditionné réversible</li>
                <li>Service d'étage deux fois par jour</li>
                <li>Bouteille d'eau offerte lors de l'ouverture du lit pour la nuit</li>
                <li>Téléviseurs et système audio avec contenu numérique haute définition à la demande offrant les films les plus récents<li>
                <li>Accès Internet très haut débit (fibre 100 mbps) sans fil. Possibilité de connecter jusqu'à quatre appareils</li>
            </ul>
            <ul>
                <li>Bureau</li>
                <li>Coffre-fort</li>
                <li>Mini Bar</li>
                <li>Douche à l'italienne (baignoire sur demande)</li>
                <li>Sèche - Cheveux</li>
                <li>Machine Nespresso</li>
                <li>Salon</li>
                <li>Produits d'accueil par Fragonard</li>
            </ul>
        </div>
    </section>

    <?php
        include('pages/fr/aside.php');
    ?>
</main>