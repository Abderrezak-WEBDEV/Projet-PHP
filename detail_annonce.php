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

<a href="annonce.php"> <button> Retour </button> </a>

<hr>
<?php }
	?>