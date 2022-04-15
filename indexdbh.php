<?php $dbh = new PDO("mysql:dbname=enchere;host=127.0.0.1", "root", ""); ?>



<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>

<body>
	<p>Merci pour ton annonce <br> <br></p>

	<p>Pseudo : <?php echo htmlspecialchars($_POST["pseudo"]); ?><br> </p>
	<p>Numéro de vendeur : <?php echo htmlspecialchars($_POST["id_user"]); ?><br> </p>
	<p>Prix de depart :<?php echo $_POST["prixdepart"]; ?> <br></p>
	<p>Date de fin d'enchère : <?php echo htmlspecialchars($_POST["enddate"]); ?><br></p>
	<p>Model de véhicule : <?php echo htmlspecialchars($_POST["model"]); ?> <br></p>
	<p>Marque du model : <?php echo htmlspecialchars($_POST["marque"]); ?> <br> </p>
	<p>Année du model : <?php echo htmlspecialchars($_POST["yearmodel"]); ?> <br> </p>
	<p>Puissance du model : <?php echo htmlspecialchars($_POST["power"]); ?> <br> </p>
	<p>Description du model : <?php echo htmlspecialchars($_POST["description"]); ?> <br> </p>
	<p>Enchere du model : <?php echo htmlspecialchars($_POST["totalenchere"]); ?> <br> </p>
</body>

</html>



<?php
$result = $dbh->prepare("INSERT INTO annonce (id_user,prixdepart,enddate,model,marque,yearmodel,power,description,pseudo,totalenchere) VALUES(?,?,?,?,?,?,?,?,?,?)");
$result->execute([$_POST["id_user"], $_POST["prixdepart"], $_POST["enddate"], $_POST["model"], $_POST["marque"], $_POST["yearmodel"], $_POST["power"], $_POST["description"], $_POST["pseudo"], $_POST["totalenchere"]])
?>