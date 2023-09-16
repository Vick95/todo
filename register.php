<?php 
require "database.php";
if (isset($_POST["envoyer"])) {
	$nom = $_POST["lastname"];
	$prenom = $_POST["firstname"];
	$telephone = $_POST["number"];

	$request = "INSERT INTO `users`(`nom`, `prenom`, `telephone`) VALUES ('$nom','$prenom','$telephone') ";
	$query = mysqli_query($todo,$request);

	if ($query) {
		header('location:login.php');
		exit();	
	} else {
		header('location:register.php');
		exit();
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nouveau compte</title>
</head>
<body>
	<form style="text-align:center;" action="" method="POST">
		<br> <br> <br> <br>
		<label>Nom</label>
		<input type="text" name="lastname" placeholder="Entre votre nom" class="form-control" required> <br> <br>
		<label>prenom</label>
		<input type="text" name="firstname" placeholder="Entre votre prenom" class="form-control" required> <br> <br>
		<label>telephone</label>
		<input type="number" name="number" placeholder="numero de telephone" class="form-control" required> <br> <br>
		<button class="form-control" type="submit" name="envoyer">Enregistrer</button>
	</form>
</body>
</html>