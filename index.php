<?php 
session_start();
if ($_SESSION['connected']){
	$nom = $_SESSION['nom'];
	$prenom = $_SESSION['prenom'];
	$id = $_SESSION['id'];	
} else {
	header('location:login.php');
	exit();
}

?>