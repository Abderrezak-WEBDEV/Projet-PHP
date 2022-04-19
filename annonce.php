<?php include __DIR__ . "/dbh.php"; ?>
<?php $dbh = new PDO("mysql:dbname=enchere;host=127.0.0.1", "root", ""); ?>


<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Nos annonces</title>
</head>

<body>
	<h2>Nos annonces</h2>
	<p>Si vous souhaitez poster une <a href="index.php">annonce </a></p>
	<?php
    $query = $dbh->query("SELECT * FROM annonce");
    $vehicule = $query->fetchAll(PDO::FETCH_ASSOC); ?>

	<?php foreach ($vehicule as $vehicule) { ?>
	<h3>Vendeur - <?= $vehicule["pseudo"] ?> </h3>
	<p>Id du vendeur : <?= $vehicule["id_user"] ?></p>
	<p>Prix de départ : <?= $vehicule["prixdepart"] ?></p>
	<p>Fin de l'encher : <?= $vehicule["enddate"] ?></p>
	<p>Model du véhicule : <?= $vehicule["model"] ?></p>
	<p>Marque du véhicule : <?= $vehicule["marque"] ?></p>
	<p>Année du véhicule : <?= $vehicule["yearmodel"] ?></p>
	<p>Puissance : <?= $vehicule["power"] ?></p>
	<p>Description : <?= $vehicule["description"] ?></p>
	<p>Total enchére du véhicule : <?= $vehicule["totalenchere"] ?></p><br>

	<br>
	<?php }
    ?>


</body>

</html>