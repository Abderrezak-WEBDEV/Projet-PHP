<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" />

    <title>Document</title>
</head>




<h1>Bienvenue sur votre page d'inscription</h1>

<form action="inscriptionbdd.php" method="post">
    <label for="Prenom"></label>
    <input type="text" placeholder="Nom" name="Prenom">

    <label for="Nom"></label>
    <input type="text" placeholder="Prenom" name="Nom">

    <label for="Mail"></label>
    <input type="text" placeholder="Mail" name="Mail">

    <label for="Mot de passe"></label>
    <input type="password" placeholder="Mot de passe" name="Motdepasse">

    <label for="Pseudo"></label>
    <input type="text" placeholder="Pseudo" name="Pseudo">

    <input type="submit" value="S'INSCRIRE">

</form>