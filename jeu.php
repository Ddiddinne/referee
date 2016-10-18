<?php
$sport=$_GET['sport'];  // On récupère dans l'url la valeur de la variable sport
?>

<html>
<head>
	<title> Game </title>
</head>

<body onload="timer">

	<div class="size60px" class="center"> <?php echo ($sport) ?> </div>   <!-- Le titre est le sport sélectionné -->

<form class="size35px" method="post">
	<br />
<?php 

	$points1 = (isset($_GET['points1']))? $_GET['points1'] : 0;
	$addpoints1 = (isset($_GET['Addpoints1']))? $_GET['Addpoints1'] : 0;
	
	$points2 = (isset($_GET['points2']))? $_GET['points2'] : 0;
	$addpoints2 = (isset($_GET['Addpoints2']))? $_GET['Addpoints2'] : 0;      // ici on initialise nos variables
	
?>


	Scores : 
	<table class="center" >
		<br />	
		<tr class="size60px">	
		    <th class="center2"> <?php echo ($Team1); ?> </th>
			<th> </th>
			<th class="center2"> <?php echo ($Team2); ?> </th>     <!-- Titres du tableau des scores = Noms entrés par l'utilisateur -->
		</tr>
	
		<tr class="size60px">
			<td> <?php echo ($points1); ?> </td>
			<td> </td>
            <td> <?php echo ($points2); ?> </td>   <!-- Points affichés après que l'utilisateur les ait entrés -->
		</tr>
		
		<tr class="size20px">
			<td> Add Points : <input type="text" placeholder="+" name="Addpoints1" /> &nbsp; </td>
			<td> <input type="submit" value="Accept" class="btn btn-dark btn-lg"/> </td>
			<td> &nbsp; <input type="text" placeholder="+" name="Addpoints2" /> : Add Points </td>    
			<!-- Zones pour enter les points -->
		</tr>
	</table>

</form>

<nav>
	<br /><br /><br />
	<a href="index.php?page=main" class="btn btn-dark btn-lg" class="size20px"> Back </a>
	<br />
	<br />
	<a href="index.php?page=fin&points1=<?php echo($points1);?>&points2=<?php echo($points2);?>&Team1=<?php echo($Team1);?>&Team2=<?php echo($Team2);?>&sport=<?php echo($sport);?>" class="btn btn-dark btn-lg" class="size20px"> End Game </a>
	<br />
	<br />
	<a href="<?php echo "index.php?page=jeu&sport=".$sport ."&Team1=".$Team1 ."&Team2=" .$Team2 ?>" class="btn btn-dark btn-lg" class="size20px"> Restart </a>
</nav>
<?php if ((!empty($_POST['Addpoints1']))||(!empty($_POST['Addpoints2']))){
			$addpoints1 = $_POST['Addpoints1'];
			$points1 = $points1 + $addpoints1;
			$addpoints2 = $_POST['Addpoints2'];
			$points2 = $points2 + $addpoints2;
			$redirection = 'index.php?page=jeu&sport='.$sport.'&points1='.$points1 .'&points2=' .$points2.'&Team1='.$Team1.'&Team2='.$Team2;
      // Etape pour incrémenter les points et actualiser la page
?>

<script type="text/javascript">
	url = "<?php echo $redirection; ?>"
	Redirection(url)

	function Redirection (url) {               // fonction qui permet le redirection
		setTimeout("window.location=url", 500)
	}
<?php } ?>
</script>

</body>
</html>