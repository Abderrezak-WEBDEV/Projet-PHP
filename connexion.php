<?php

include_once __DIR__."/header.php"; 

session_start();

require __DIR__ . "/dbh.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<title>Connexion</title>
	<link rel="stylesheet" href="annonce.css">
</head>

<body>
	<div class="connexion">
		<form action="annonce.php" method="POST" id="annonce">
			<h1>*** Se connecter ***</h1>
			<br />
			<label for="email">E-mail</label>
			<input type="text" name="email">
			<br />
			<label for="password">Mot de Passe</label>
			<input type="password" name="password">
			<br />
			<button type="submit">Connexion</button>

			<p><a href="inscription.php">S'inscrire</a></p>
		</form>
		
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