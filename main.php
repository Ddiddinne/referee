<html>

<head>
	<title>main</title>
</head>
	
<body>
	<h1>Welcome on</h1>
	<h1 class="couleurBleu" > BeYourOwnReferee ! </h1>
            <h3>The sport selected is <?php echo($sport); ?> played with 2 people.</h3>
            <br>
			<a href="index.php?page=option" class="btn btn-dark btn-lg">Change the sport</a>
			</br>
			</br>
            <a href="<?php echo "index.php?page=name&sport=".$sport?>" class="btn btn-dark btn-lg">Play !</a>

</body>

</html>