<main>
    <?php
        include('pages/fr/menu2.php');
    ?>

    <section>
        <!-- FIL D'ARIANE -->
        <div class="ariane">
            <p><a href="index.php?page=accueil">Accueil</a> > <a href="index.php?page=chambres">Chambres & Suites</a> > Chambre Deluxe</p>
        </div>
        
        <!-- CARROUSEL PAGE CHAMBRE -->
        <div class="s-wrap s-type-1 s-room3" role="slider" aria-valuenow="4" aria-valuemin="1" aria-valuemax="10">
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
            <h1>Chambre Deluxe</h1>
            <p>Un décor épuré et résolument contemporain vous accueille dans la Chambre Deluxe. Séparée de la chambre par des portes en verre dépoli, la salle de bain offre une ambiance apaisante.</p>
            <p>L’alliance du mobilier contemporain et des équipements de la plus haute technologie lui confère élégance et confort absolu.</p>
            <p>A partir de 450€/nuit</p>
        </div>
        <div class="services">
            <h2>SERVICES & ÉQUIPEMENTS</h2>
            <ul>
                <li>2 personnes</li>
                <li>1 Lit Double</li>
                <li>29m²</li>
                <li>Lit King size</li>
                <li>Couettes et oreillers en duvet d'oie et luxueux linge de lit</li>
                <li>Climatisation</li>
                <li>Service d'étage deux fois par jour et bouteille d'eau offerte lors de l'ouverture du lit pour la nuit</li>
                <li>Télévision à écran plat avec les chaines satellites</li>
                <li>Téléphone</li>
                <li>Wi-Fi</li>
            </ul>
            <ul>
                <li>Bureau</li>
                <li>Coffre-fort</li>
                <li>Mini Bar</li>
                <li>Douche à l'italienne (baignoire selon disponibilité)</li>
                <li>Sèche - Cheveux</li>
                <li>Machine à café Nespresso</li>
                <li>Salon moderne et confortable</li>
                <li>Produits de toilette exclusifs Buly 1803</li>
                <li>Peignoirs en éponge et chaussons</li>
                <li>Système Audio</li>
            </ul>
        </div>
    </section>

    <?php
        include('pages/fr/aside.php');
    ?>
</main>