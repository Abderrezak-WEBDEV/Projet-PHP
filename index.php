<?php
include_once __DIR__ . "/header.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<title>Déposer votre annonces</title>
	<link rel="stylesheet" href="annonce.css">
</head>

<body>

	<form action="indexdbh.php" method="POST" id="annonce">
		<h1> Formulaire d'annonce </h1>

		<input type="text" name="pseudo" placeholder="Pseudo">
		<br>

		<input type="text" name="id_user" placeholder="Id vendeur">
		<br>

		<input type="number" name="prixdepart" placeholder="Prix de départ">
		<br>


		<input type="date" name="enddate" placeholder="Date de fin de l'enchère">
		<br>

		<input type="text" name="model" placeholder="Model du véhicule">
		<br>


		<input type="text" name="yearmodel" placeholder="Année du modèle">
		<br>


		<input type="text" name="marque" placeholder="Marque du véhicule">
		<br>


		<input type="text" name="power" placeholder="Puissance du modèle">
		<br>


		<textarea name="description" id="" cols="30" rows="2" placeholder="Description du modèle"></textarea>
		<br>

		<input type="number" name="totalenchere" placeholder="Enchere modèle">
		<br>
		<button type="submit">Poster mon annonce</button>

		<br><br>
	</form>
	<style>
	h1 {
		color: rgb(0, 255, 136);
	}

	#annonce {
		background-color: white;
		box-shadow: 10px 5px 5px rgb(0, 255, 136);

	}

	button {
		width: 80%;
		margin-left: 10%;
		height: 30px;
		border-radius: 5px;
	}

	input {
		background-color: rgb(0, 255, 136);
	}

	textarea {
		background-color: rgb(0, 255, 136);
	}
	</style>


</body>


</html>