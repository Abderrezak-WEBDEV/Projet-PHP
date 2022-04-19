<?php
session_start();
?>
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
			<label for="email">E-mail</label>
			<input type="text" name="email">
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
		<button type="submit">Se déconnecter</button>
	</div>

	<?php

	$email =  htmlspecialchars($_POST['email']);

	$password = htmlspecialchars($_POST['password']);


	$dbh = new PDO("mysql:dbname=enchere;host=localhost", "root", "root");
	$send = $dbh->prepare('SELECT * FROM Users WHERE email = ?');
	$send->execute([$email]);
	$response = $send->fetchAll(PDO::FETCH_ASSOC);
	if ($response == true) {
		foreach ($response as $value) {
			if (password_verify($password, $value['pw'])) {
				$_SESSION['user'] = $value['email'];
				header("Location:test.php");
			} else {
				echo "Mot de passe Incorrect";
			}
		}
	} else {
		echo "erreur1";
	}
	//  Exécuter la requête sur la base de données




	/* session_start();
		if (!isset($_SESSION['email'])) {
			$user = $_SESSION['email'];
			// afficher un message
			echo "Bonjour $email, vous êtes connecté";
		}; */
	/* 	} */
	?>
	</form>
	</div>


</body>

</html>