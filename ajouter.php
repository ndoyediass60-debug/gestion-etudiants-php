<?php
include("connexion.php");

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];

// Ajouter (INSERT)
$a = mysqli_query($c, "INSERT INTO etudiants (nom, prenom) VALUES ('$nom', '$prenom')");

header("Location: index.php"); // Retour à l'accueil
?>