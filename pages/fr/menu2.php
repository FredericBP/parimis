<!-- MENU 2 (SOUS-MENU A GAUCHE) -->
<nav id="menu2">
    <div class="sousMenuStyle1 <?php $menu2Active = menu2Active('chambres'); echo $menu2Active ?> active" id="sousMenu1">
        <p class="click-text menu2First">CHAMBRES & SUITES <span class="arrow"></span></p>
        <ul>
            <li><a href="index.php?page=classique">Chambre Classique</a></li>
            <li><a href="index.php?page=confort">Chambre Confort</a></li>
            <li><a href="index.php?page=deluxe">Chambre Deluxe</a></li>
            <li><a href="index.php?page=suite">Suite</a></li>
        </ul>  
    </div>
    <div class="sousMenuStyle1 <?php $menu2Active = menu2Active('restaurant'); echo $menu2Active ?> active" id="sousMenu2">
        <p class="click-text">RESTAURANT - Le Montesquieu <span class="arrow"></span></p>
        <ul>
            <li><a href="index.php?page=carte-brasserie">Carte Brasserie</a></li>
            <li><a href="index.php?page=carte-degustation">Carte Dégustation</a></li>
            <li><a href="index.php?page=carte-restaurant">Carte Restaurant</a></li>
        </ul>  
    </div>
    <div class="sousMenuStyle1 <?php $menu2Active = menu2Active('spa'); echo $menu2Active ?> active" id="sousMenu3">
        <p class="click-text">SPA - Visrama <span class="arrow"></span></p>
        <ul>
            <li><a href="index.php?page=detente">Soin Détente</a></li>
            <li><a href="index.php?page=decouverte">Soin Découverte</a></li>
            <li><a href="index.php?page=relaxant">Soin Relaxant</a></li>
            <li><a href="index.php?page=plaisir">Soin Plaisir</a></li>
            <li><a href="index.php?page=evasion">Soin Evasion</a></li>
        </ul>  
    </div>
    <div class="sousMenuStyle1 <?php $menu2Active = menu2Active('hotel'); echo $menu2Active ?> active" id="sousMenu4">
        <p class="click-text">L'HOTEL PARIMIS <span class="arrow"></span></p>
        <ul>
            <li><a href="index.php?page=hotel">Qui sommes-nous ?</a></li>
            <li><a href="index.php?page=acces">Accès</a></li>
            <li><a href="index.php?page=evenements">Evènements</a></li>
            <li><a href="index.php?page=avis">Avis</a></li>
            <li><a href="index.php?page=contact">Contact</a></li>
            <li><a href="index.php?page=presse">Presse</a></li>
            <li><a href="index.php?page=recrutement">Recrutement</a></li>
        </ul>  
    </div>
    <div class="sousMenuStyle2">
        <p><a href="index.php?page=news">NEWS</a></p>
    </div>
    <div class="sousMenuStyle2">
        <p><a href="index.php?page=reservation">RESERVATION</a></p>
    </div>
</nav>