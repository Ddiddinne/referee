<?php
	Database::insertGame($_GET['sport'], $Team1, $Team2, $points1, $points2); //insertion of the finished game into the Database (done in Database.php)
 ?>
<html>
	<h2> Le score de <?php echo $Team1 ?> est : <?php echo $points1 ?> </h2>
	</br>
	<h2> Le score de <?php echo $Team2 ?> est : <?php echo $points2 ?> </h2>   <!-- Affiche le score des deux équipes  -->
	<br /><br />
<?php
	if ($points1>$points2) {
?>	 <h1> The Winner is : <?php echo $Team1 ?> ! </h1>
<?php	}  
	if ($points2>$points1) {
?>  <h1> The Winner is : <?php echo $Team2 ?> !  </h1>
<?php	}   
	if ($points1 == $points2) {
?>  <h1> It's a draw, You are both the Winners ! <h1>
<?php  }  ?>
<!-- Puis on indique qui est le gagnant -->
<br />
<?php
	echo('<a href="index.php?page=main" class="btn btn-dark btn-lg">Game is over !</a>')
?>

</html>
 