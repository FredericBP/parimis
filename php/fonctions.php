<?php
	// Menu1 - Gestion des liens en en-tête
    function menu1($lang){
		if($lang == 'fr'){
			$menuTexte = ['CHAMBRES', 'RESTAURANT', 'SPA', 'L\'HOTEL', 'CONTACT'];
		} elseif($lang == 'en'){
			$menuTexte = ['ROOMS', 'RESTAURANT', 'SPA', 'THE HOTEL', 'CONTACT US'];
		} else{
            $menuTexte = ['ROOMS', 'RESTAURANT', 'SPA', 'THE HOTEL', 'CONTACT US'];
        }
		
		$menuUrl = ['index.php?page=chambres', 'index.php?page=restaurant', 'index.php?page=spa', 'index.php?page=hotel', 'index.php?page=contact'];
		
		$resMenu1 = '';
		
		foreach($menuTexte as $key => $value){
						
			$menuLien = $menuUrl[$key];
			
			$resMenu1 = $resMenu1 . '<li><a href="' . $menuLien . '">' . $value . '</a></li>';
		}
        
		return $resMenu1;
	}
    
    
    //Menu2 - Déroulement du sous-menu correspondant à la page active
    function menu2Active($categorie){        
        if($categorie == $pages[0]){
            $resMenu2Active = 'active';
        }
        
        return $resMenu2Active;
    }
    
    
    // MenuFooter - Gestion des liens en bas de page
    function menuFooter($lang){
		if($lang == 'fr'){
			$footerTexte = ['CONTACTEZ-NOUS', 'PRESSE', 'RECRUTEMENT', 'PLAN DU SITE', 'MENTIONS LEGALES', 'CGV'];
		} elseif($lang == 'en'){
			$footerTexte = ['CONTACT US', 'PRESS', 'CAREERS', 'SITEMAP', 'LEGAL NOTICES', 'TERMS OF USE'];
		} else{
            $footerTexte = ['CONTACT US', 'PRESS', 'CAREERS', 'SITEMAP', 'LEGAL NOTICES', 'TERMS OF USE'];
        }
		
		$footerUrl = ['index.php?page=contact', 'index.php?page=presse', 'index.php?page=recrutement', 'index.php?page=plan-du-site', 'index.php?page=mentions-legales', 'index.php?page=cgv'];
		
		$resFooter = '';
		
		foreach($footerTexte as $key => $value){
						
			$footerLien = $footerUrl[$key];
			
			$resFooter = $resFooter . '<li><a href="' . $footerLien . '">' . $value . '</a></li>';
		}
        
		return $resFooter;
	}
?>