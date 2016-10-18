<?php
include_once('sport.php');
	
    $sport = new Sport();  // Instanciation de la classe Sport

    $isFullSport=$sport->setSport($_POST);  // si les zones de texte sont remplies on enregistre le sport dans la base de données à l'aide de saveSport()
    if ($isFullSport){
        $sport->saveSport();
		$isFullSport=false; ?>
		<br /><a href="index.php?page=main" class="btn btn-dark btn-lg"> Back to the main page ! </a>
	<?php	
    } else {
		//affichage du formulaire
		$sport->printAddSportForm();        
    }

?>
