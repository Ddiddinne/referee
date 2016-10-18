<html>
<?php
// On affiche tous les matchs avec les noms d'équipes et leurs points, dans un tableau

$test = (isset($_POST['deleteAllGames']))? $_POST['deleteAllGames']:0;
if ($test==1){
	//suppression des parties enregistrées. (si demandé)
	Database::deleteAllGames();
}
	//récupération des parties enregistrées.
	$req=Database::getGames();

?>

    <table class="table">
	<tr>			
		<th class="size20px"> Sport </th>
		<th class="size20px"> Team 1 </th>		
		<th class="size20px"> Score </th>
		<th class="size20px"> Team 2 </th>
		<th class="size20px"> Score </th>
	</tr>
    <?php while ($line = $req->fetch()) { ?>
        <tr>
			<td> <?php echo($line['sport_name']); ?> </td>
			<td> <?php echo($line['equipe1_name']); ?> </td>		
			<td> <?php echo($line['score_equipe1']); ?> </td>
			<td> <?php echo($line['equipe2_name']); ?> </td>
			<td> <?php echo($line['score_equipe2']); ?> </td>
        </tr>
    <?php } ?>
	</table>
		<br />
		<br />
		<a href="index.php?page=suppressionleader" class="btn btn-dark btn-lg"> Erase </a>
	
</html>

