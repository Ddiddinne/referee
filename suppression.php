<html>

<?php 

$deleteSport = (isset($_POST['deleteSport']))? $_POST['deleteSport']:0;
$bdd = Database::getDb();
if ($deleteSport==1){
	//suppression d'un sport (si demandé).
	Database::deleteSport($_GET['sport']);
}
//récupération des sport enregistrés.
$req=Database::getSport();
?>

<p class="size35px"> You want to erase which sport?</p>

<p>
<form name="formulaire" method="post" action="index.php?page=confirmation" class="size35px">
			<?php $nb=0;
			while ($line = $req->fetch()) { 
			?>
			<input type="radio" name="sport" value=<?php echo($line['sport_name']);?> /> <?php $nb = $nb +1;echo($line['sport_name']); }?>

				<br />
				<br />
			<?php if($nb==1){echo "You cannot delete this sport otherwise you will have nothing to play";}
			else{?>
          <input type="submit" value="Erase" class="btn btn-dark btn-lg"/>
			<?php } ?>
		  <br />
		  <br />
		  <a href="index.php?page=main" class="btn btn-dark btn-lg"> Back </a>
        </form>

			
</p>
	
	
</html>