<?php

$Nom = (string)htmlspecialchars($_POST['Nom']);
$Prenom = (string)htmlspecialchars($_POST['Prenom']);
$Mail = (string) filter_var($_POST['Mail'], FILTER_SANITIZE_EMAIL);
$Motdepasse = (string)password_hash($_POST['Motdepasse'], PASSWORD_DEFAULT);
$Pseudo = (string)htmlspecialchars($_POST['Pseudo']);

$dbh = new PDO("mysql:dbname=enchere;host=127.0.0.1", "root", "");
$query = $dbh->prepare("INSERT INTO Users (firstname, lastname, email, pw, pseudo) VALUES (?,?,?,?,?);");
$result = $query->execute([$Nom, $Prenom, $Mail, $Motdepasse, $Pseudo]);

if ($result === true) {
    echo "Vroum ! Vroum ! Vroum ! Ton inscription a réussis ! <br> Bienvenue sur votre site d'encheres !! <br> Cliquez <a href='annonce.php'>ici</a> , pour trouver toutes nos annonces ! ";
} else {
    echo "BOUM, ton inscription n'as pas fonctionner... Recommence !";
}