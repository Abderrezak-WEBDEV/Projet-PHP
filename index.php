<?php
include_once __DIR__."/header.php"; 
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
	     <h1>*** Formulaire d'annonce ***</h1>
		<label for="pseudo">Pseudo :</label>
		<input type="text" name="pseudo" value="Kata">
		<br>

		<label for="id_user">Votre Id en nombre :</label>
		<input type="text" name="id_user" value=1>
		<br>

		<label for="prixdepart">Prix de départ :</label>
		<input type="number" name="prixdepart" value="999">
		<br>

		<label for="enddate">Date de fin de l'enchère :</label>
		<input type="date" name="enddate">
		<br>

		<label for="model">Model du véhicule :</label>
		<input type="text" name="model" value="Zoe">
		<br>

		<label for="yearmodel">Année du model :</label>
		<input type="text" name="yearmodel" value="2022">
		<br>

		<label for="marque">Marque du véhicule :</label>
		<input type="text" name="marque" value="Renault">
		<br>

		<label for="power">Puissance du model :</label>
		<input type="text" name="power" value="30cv">
		<br>

		<label for="description">Description du model :</label>
		<textarea name="description" id="" cols="30" rows="2">coucou</textarea>
		<br>

		<label for="totalenchere">Enchere model :</label>
		<input type="number" name="totalenchere" value="10">
		<br>
		<button type="submit">Poster mon annonce</button>

		<br><br>
	</form>



</body>


</html>