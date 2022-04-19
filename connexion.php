<?php
session_start();

require __DIR__ . "/dbh.php";
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
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$email =  filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
		$password = $_POST['password'];

		$send = $dbh->prepare('SELECT * FROM Users WHERE email = ?');
		$send->execute([$email]);
		$value = $send->fetch(PDO::FETCH_ASSOC);
		if ($value != false) {
			if (password_verify($password, $value['pw'])) {
				$_SESSION['user'] = $value['email'];
				header("Location:test.php");
			} else {
				echo "Mot de passe Incorrect";
			}
		} else {
			echo "erreur1";
		}
	}
	?>
	</form>
	</div>


</body>

</html>