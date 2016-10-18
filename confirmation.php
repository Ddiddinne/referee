<html>
<?php $sport = (isset($_POST['sport']))? $_POST['sport']:0; ?>

<p class="size35px"> You really want to erase <?php echo $sport?> ? </p>
<form name="formulaire" method="post" action=" <?php echo "index.php?page=suppression&sport=".$sport?>" class="size35px" >

			<input type="radio" name="deleteSport" value=1;/> Yes
			<br/>
			<br/>
			<input type="radio" name="deleteSport" checked value=0;/> No
			<br/>
			<br/>
			<input type="submit" value="validate" class="btn btn-dark btn-lg"/>
			</form>
			
</html>