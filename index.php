<!-- IMPORTATION DES FONCTIONS PHP -->
<?php
	include('php/init.php');
	include('php/fonctions.php');
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Hôtel PARIMIS - <?php echo ucfirst($pageActive) ?></title>
        <meta charset="utf-8">
        <meta name="description" content="L'hôtel PARIMIS 5 étoiles vous offre une expérience sur-mesure à Paris. Profitez de nos chambres et suites de luxe, du restaurant Le Montesquieu et du SPA Visrama.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="web/files/favicon.ico">
        
        <!-- IMPORTATION DES FEUILLES DE STYLES CSS -->
        <link rel="stylesheet" href="web/styles/styles.css">
        <link rel="stylesheet" href="web/styles/structure-xl.css" media="screen and (min-width : 1200px)">
        <link rel="stylesheet" href="web/styles/structure-lg.css" media="screen and (min-width : 992px) and (max-width : 1199px)">
        <link rel="stylesheet" href="web/styles/structure-md.css" media="screen and (min-width : 768px) and (max-width : 991px)">
        <link rel="stylesheet" href="web/styles/structure-sm.css" media="screen and (min-width : 576px) and (max-width : 767px)">
        <link rel="stylesheet" href="web/styles/structure-xs.css" media="screen and (max-width : 575px)">
        <link rel="stylesheet" href="web/styles/impression.css" media="print">
        
        <!-- IMPORTATION DE JAVASCRIPT ET BIBLIOTHEQUE JQUERY -->
        <script src="web/library/jquery-3.3.1.min.js"></script>
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <!-- TRADUCTION DU CALENDRIER EN FRANCAIS <script src="web/scripts/jquery.ui.datepicker-fr.js"></script> -->
        <script src="web/scripts/script.js"></script>
    </head>
    <body id="top">
        
        <!-- EN-TETE -->
        <header>
            <div class="flex1">
                <div class="flex2">
                    
                    <!-- ICONE DU MENU HAMBURGER -->
                    <div id="nav-icon1">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    
                    <!-- LOGO -->
                    <div id="logo">
                        <a href="index.php?page=accueil"><img src="web/files/logo_parimis-b.png" alt="Logo"></a>
                    </div>
                    <div id="reservation"><a href="index.php?page=reservation">RESERVEZ</a></div>
                    
                    <!-- BARRE D'OPTIONS (PANIER/RECHERCHE/LANGUES) -->
                    <div id="header-options">
                        <div id="panier">
                            <a href="index.php?page=panier" title="Voir vos réservations"><img src="web/files/panier.png" alt="panier"></a>
                        </div>
                        <div id="recherche">
                            <label for="search"><img src="web/files/loupe.png" alt="loupe"></label>
                            <input type="search" placeholder="Rechercher sur le site" id="search" />
                            <input type="submit" value="OK">
                        </div>
                        <div id="langues">
                            <p id="boutonLangues">Français</p>
                            <ul id="menuLangues">
                                <li>Français</li>
                                <li>English</li>
                                <li>Español</li>
                                <li>Italiano</li>
                                <li>Português</li>
                                <li>日本語</li>
                                <li>简体中文</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- MENU 1 (MENU PRINCIPAL) -->
                <nav id="menu1">
                    <ul>
                        <?php
                            $menu1 = menu1('fr');
                            echo $menu1;
                        ?>
                    </ul>
                </nav>
            </div>
        </header>
        
        <!-- INTEGRATION PHP DU CONTENU PRINCIPAL DE LA PAGE -->
        <?php
            include($inclusion);
        ?>
        
        <!-- PIED DE PAGE -->
        <footer>
            <p>SUIVEZ-NOUS</p>
            <ul>
                <li><div id="newsletter"><a href="index.php?page=newsletter">INSCRIVEZ-VOUS A LA NEWSLETTER</a></div></li>
                <li class="partage"><a href="https://fr-fr.facebook.com/ifocop"><img src="web/files/logo_facebook.png" alt="Logo Facebook" title="Retrouvez l'hôtel PARIMIS sur Facebook"></a></li>
                <li class="partage"><a href="https://twitter.com/ifocop"><img src="web/files/logo_twitter.png" alt="Logo Twitter" title="Retrouvez l'hôtel PARIMIS sur Twitter"></a></li>
                <li class="partage"><a href="https://www.instagram.com/groupe_ifocop/"><img src="web/files/logo_instagram.png" alt="Logo Instagram" title="Retrouvez l'hôtel PARIMIS sur Instagram"></a></li>
                <li class="partage"><a href="https://www.tripadvisor.fr/"><img src="web/files/logo_tripadvisor.png" alt="Logo Tripadvisor" title="Retrouvez l'hôtel PARIMIS sur Tripadvisor"></a></li>
                <li class="partage"><a href="#" onclick="javascript:window.print();" title="Imprimer la page"><img src="web/files/print.png" alt="Impression"></a></li>
            </ul>
            <ul>
                <li>1 avenue Montaigne 75008 PARIS - FRANCE</li>
                <li><a href="mailto:contact@parimis.com">contact@parimis.com</a></li>
                <li>+33 1 01 02 03 04</li>
            </ul>
            <ul>
                
                <!-- MENU DU PIED DE PAGE -->
                <?php
                    $menuFooter = menuFooter('fr');
                    echo $menuFooter;
                ?>
            </ul>
        </footer>
	</body>
</html>