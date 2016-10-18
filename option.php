
<?php 
$req=Database::getSport(); //retrieve the list of all sport present in the database. (done in the Database.php)
?>
	
<html>

<head >
    <title>Options</title>
</head>

<body>

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1>Options</h1>
			<br />
 
			<form name="formulaire" method="post" action="index.php" class="size35px">
			<?php while ($line = $req->fetch()) { // Tant qu'il y a une prochaine ligne on fait la prochaine action?>
			<input type="radio" name="sport" value=<?php echo($line['sport_name']);?> /> <?php echo($line['sport_name']); }  // Création d'un radio ?>
				<br />
				<br />
				
          <input type="submit" value="validate" class="btn btn-dark btn-lg"/>
        </form>
		<br />
		<br />
		<a href="index.php?page=createSport" class="btn btn-dark btn-lg"> Create a sport </a>
		<br />
		<br />
		<a href="index.php?page=regles" class="btn btn-dark btn-lg"> Rules </a>
		<br />
		<br />
		<a href="index.php?page=suppression" class="btn btn-dark btn-lg"> Erase a sport </a>
		
        </div>
    </header>
   

</body>

</html>
