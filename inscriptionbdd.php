<?php

$Nom = (string)htmlspecialchars($_POST['Nom']);
$Prenom = (string)htmlspecialchars($_POST['Prenom']);
$Mail = (string) filter_var($_POST['Mail'], FILTER_SANITIZE_EMAIL);
$Motdepasse = (string)password_hash($_POST['Motdepasse'], PASSWORD_DEFAULT);
$Pseudo = (string)htmlspecialchars($_POST['Pseudo']);

$dbh = new PDO("mysql:dbname=enchere;host=localhost", "root", "root");
$query = $dbh->prepare("INSERT INTO Users (firstname, lastname, email, pw, pseudo) VALUES (?,?,?,?,?);");
$result = $query->execute([$Nom, $Prenom, $Mail, $Motdepasse, $Pseudo]);

if ($result === true) {
    echo "Vroum ! Vroum ! Vroum ! Bienvenue sur votre site d'encheres !! ";
} else {
    echo "Not Success";
}
