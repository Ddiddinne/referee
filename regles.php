<html>
<?php 
$req=Database::getRules(); //récupération des règles des jeux dans la BDD.
?>
<nav class="size20px">
<!-- affichage des règle -->
<?php while ($line = $req->fetch()) { ?>
			<h2><?php echo$line['sport_name'];?></h2>
			<br/>
			<?php echo$line['rules'];?>
			<br /> <br />
			<?php } ?>
			<br />


<a href="index.php?page=option" class="btn btn-dark btn-lg"> Back </a>

</nav>

</html>