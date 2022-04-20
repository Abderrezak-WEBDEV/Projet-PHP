<?php

// Insertion des  encheres dans notre base de données

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // On vérifie que l'utilisateur est bien connecté
    session_start();

    if (!isset($_SESSION["id_user"])) {
        // S'il n'est pas connecté, on le renvoit vers la page de connexion
        header("Location: connexion.php");
        die();
    }
    // Sinon on insère son enchere dans notre base de données

    $id_user_acheteur = $_SESSION["id_user"];
    $id_annonce = filter_var($_POST["id_annonce"], FILTER_SANITIZE_NUMBER_INT);
    $prix_propose = filter_var($_POST["price"], FILTER_SANITIZE_NUMBER_FLOAT);

    $dataBase = new PDO("mysql:dbname=enchere;host=127.0.0.1", "root", "");


    $requete = $dataBase->prepare("INSERT INTO enchere (id_user, id_annonce, price)
    VALUES (?, ?, ?)");
    $result = $requete->execute([$id_user_acheteur, $id_annonce, $prix_propose]);
}