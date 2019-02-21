<main>
    <?php
        include('pages/fr/menu2.php');
    ?>

    <section>
        <!-- FIL D'ARIANE -->
        <div class="ariane">
            <p><a href="index.php?page=accueil">Accueil</a> > <a href="index.php?page=spa">SPA Visrama</a> > Soin Plaisir</p>
        </div>
        
        <!-- CARROUSEL PAGE SOIN SPA -->
        <div class="s-wrap s-type-1 s-spa" role="slider" aria-valuenow="4" aria-valuemin="1" aria-valuemax="10">
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
            <h1>Soin Plaisir</h1>
            <p><span>2 heures 20 minutes</span></p>
            <p>Ce soin réchauffant et méditatif vous offre la quintessence de l’Orient.</p>
            <ul>
                <li>Rituel Tian Quan</li>
                <li>Rituel des pieds de bienvenue</li>
                <li>Gommage du corps Quintessence</li>
                <li>Modelage du corps Oriental Bambou</li>
            </ul>
        </div>
    </section>

    <?php
        include('pages/fr/aside.php');
    ?>
</main>