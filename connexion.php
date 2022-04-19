<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<title>Connexion</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<div class="connexion">
		<h1>Se connecter</h1>
		<form action="annonce.php" method="POST">
			<br />
			<label for="pseudo">Pseudo</label>
			<input type="text" name="pseudo">
			<br />
			<label for="password">Mot de Passe</label>
			<input type="password" name="password">
			<br />
			<button type="submit">Connexion</button>
		</form>

		<form action="inscription.php" method="POST">
			<button type="submit">S'inscrire</button>
		</form>

		<form action="annonce.php" method="POST">
			<button type="submit">Nos Annonces</button>
		</form>
	</div>

</body>

</html>