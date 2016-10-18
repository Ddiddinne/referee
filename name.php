<?php
	$sport=$_GET['sport'];
	$suivant = isset($_GET['suivant'])?$_GET['suivant']:0;
?>

<html>
<head>
	<title> Team's names </title>
</head>

<body>
	<p class="center">
	<h2 class="size80px"> What are the Teams' names ? </h2>
	</p>


<?php 
// Si on a cliqué sur "Let's start" de cette page juste avant, alors on prend les valeurs des Team1 et Team2 pour se rediriger vers la page jeu avec les bons arguments
if ($suivant==1){
			if(!empty($_POST['Team1'])){
			$Team1 = $_POST['Team1'];}
			if(!empty($_POST['Team2'])){
			$Team2 = $_POST['Team2'];}
			$redirection = 'index.php?page=jeu&sport='.$sport .'&Team1='.$Team1 .'&Team2=' .$Team2;
?>

<script type="text/javascript">
	url = "<?php echo $redirection; ?>"
	Redirection(url)

	function Redirection (url) {
		setTimeout("window.location=url", 500)
	}
<?php }
	
	?>
</script>
<form method="post" action=" <?php echo "index.php?page=name&suivant=1&sport=".$sport ?>" >	

	<br /><br />
<nav>

	<input type="text" placeholder="Team 1's name" name="Team1" class="size35px"/>
	<input type="text" placeholder="Team 2's name" name="Team2" class="size35px"/>
	<br /><br /><br />
	<!-- rediretion vers cette même page quand on clique sur "Let's start" mais avec en argument dans l'url: suivant=1 et grâce à la method post, les valeur de Team1 et Team2 -->
	<input type="submit" value="Let's start" class="btn btn-dark btn-lg"/>
	<br /><br /><br /><br />

</nav>

</form>

<a href="index.php?page=main" class="btn btn-dark btn-lg"> Back </a>


</body>
</html>