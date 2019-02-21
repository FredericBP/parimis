<?php
	$pageActive = 'accueil';
	
	// valeurs de l'url
	if( !empty($_GET) && isset($_GET['page']) ){
        
        $pageActive = $_GET['page'];
        
        /*
        if( $_GET['page'] == 'produits' ){
            if( isset($_GET['fiche']) && !empty($_GET['fiche']) ){
                $pageActive = 'fiche_produit_' . $_GET['fiche'];
            }
        }
        */
	}

	// Algorithme sur les pages
	$pages = [
		'accueil' => 'pages/fr/accueil.php',
		'chambres' => 'pages/fr/chambres/chambres.php',
		'classique' => 'pages/fr/chambres/classique.php',
		'confort' => 'pages/fr/chambres/confort.php',
		'deluxe' => 'pages/fr/chambres/deluxe.php',
		'suite' => 'pages/fr/chambres/suite.php',
		'restaurant' => 'pages/fr/restaurant/restaurant.php',
        'carte-brasserie' => 'pages/fr/restaurant/carte-brasserie.php',
		'carte-degustation' => 'pages/fr/restaurant/carte-degustation.php',
		'carte-restaurant' => 'pages/fr/restaurant/carte-restaurant.php',
		'spa' => 'pages/fr/spa/spa.php',
        'detente' => 'pages/fr/spa/detente.php',
		'decouverte' => 'pages/fr/spa/decouverte.php',
		'relaxant' => 'pages/fr/spa/relaxant.php',
		'plaisir' => 'pages/fr/spa/plaisir.php',
		'evasion' => 'pages/fr/spa/evasion.php',
		'hotel' => 'pages/fr/hotel/hotel.php',
		'acces' => 'pages/fr/hotel/acces.php',
		'evenements' => 'pages/fr/hotel/evenements.php',
		'avis' => 'pages/fr/hotel/avis.php',
		'presse' => 'pages/fr/hotel/presse.php',
		'recrutement' => 'pages/fr/hotel/recrutement.php',
		'contact' => 'pages/fr/hotel/contact.php',
		'news' => 'pages/fr/news/news.php',
		'reservation' => 'pages/fr/reservation.php',
		'panier' => 'pages/fr/panier.php',
		'newsletter' => 'pages/fr/newsletter.php',
		'plan-du-site' => 'pages/fr/plan-du-site.php',
		'mentions-legales' => 'pages/fr/mentions-legales.php',
		'cgv' => 'pages/fr/cgv.php',
	];
    
	$inclusion = 'pages/fr/accueil.php';
	
	foreach($pages as $indice => $valeur){
        
		if( $indice == $pageActive ){
			$inclusion = $valeur;
		}
	}
?>