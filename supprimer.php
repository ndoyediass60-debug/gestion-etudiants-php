<?php
include("connexion.php");
$id = $_GET['id'];

// Supprimer (DELETE)
$s = mysqli_query($c, "DELETE FROM etudiants WHERE id=$id");

header("Location: index.php"); // Retour à l'accueil
?>