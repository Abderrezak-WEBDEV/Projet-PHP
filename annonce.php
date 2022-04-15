
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<article>
                  <h1>    Annonce du jour </h1> 
                  
        <P>Pseudo : <?php echo htmlspecialchars($_POST["pseudo"]); ?> </p>
        <br />
        <P>Numéro de vendeur: <?php echo htmlspecialchars($_POST["id_user"]); ?> </p>
        <br/>
        <p> de depart :<?php echo $_POST["prixdepart"]; ?> </p>
        <br/>
        <P>Date de fin d'enchère<?php echo htmlspecialchars($_POST["enddate"]); ?></p>
        <br/>
        <P>Model de véhicule :<?php echo htmlspecialchars($_POST["model"]); ?> </p>
        <br/>
        <P>Marque du model : <?php echo htmlspecialchars($_POST["marque"]); ?>  </p>
        <br/>
        <P>Année du model : <?php echo htmlspecialchars($_POST["yearmodel"]); ?> </p>
        <br/>
        <P>Puissance du model : <?php echo htmlspecialchars($_POST["power"]); ?> </p>
        <br/>
        <P>Description du model : <?php echo htmlspecialchars($_POST["description"]); ?> </p>
        <br/>
        <P>Enchere du model : <?php echo htmlspecialchars($_POST["totalenchere"]); ?> </p>
        
    </article>

</body>
</html>