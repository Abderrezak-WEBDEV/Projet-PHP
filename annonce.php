<?php include __DIR__ . "/dbh.php"; ?>
<?php
include_once __DIR__."/header.php"; 
?>
<?php $dbh = new PDO("mysql:dbname=enchere;host=localhost", "root", ""); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<title>Nos annonces</title>
</head>

<body>
    <div  id = "annonces"> 
     <h1>Nos annonces</h1>
    <p>Si vous souhaitez poster une <a href="index.php">Annonce </a></p>
    <?php
    $query = $dbh->query("SELECT * FROM annonce");
    $vehicule = $query->fetchAll(PDO::FETCH_ASSOC); ?>

    <?php foreach ($vehicule as $vehicule) { ?>
        <h1>Vendeur - <?= $vehicule["pseudo"] ?> </h1>
        <p>Id du vendeur : <?= $vehicule["id_user"] ?></p>
        <p>Prix de départ : <?= $vehicule["prixdepart"] ?></p>
        <p>Fin de l'encher : <?= $vehicule["enddate"] ?></p>
        <p>Model du véhicule : <?= $vehicule["model"] ?></p>
        <p>Marque du véhicule : <?= $vehicule["marque"] ?></p>
        <p>Année du véhicule : <?= $vehicule["yearmodel"] ?></p>
        <p>Puissance : <?= $vehicule["power"] ?></p>
        <p>Description : <?= $vehicule["description"] ?></p>
        <p>Total enchére du véhicule : <?= $vehicule["totalenchere"] ?></p><br>

        <hr>
    <?php }
    ?>
</div>
<style>

h1 {
  color: rgb(0, 255, 136);
 text-align: center;
}
p {
    margin-left: 20px;
}
#annonces {
   background-color: white;
   box-shadow: 10px 5px 5px rgb(0, 255, 136);
   width: 50%;
   margin-left: 25%;
}
button {
	width: 80%;
	margin-left: 10%;
	height: 30px;
	border-radius: 5px;
}
input {
	background-color:rgb(0, 255, 136);
}


</style>
</body>
</html>