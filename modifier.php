<?php
include("connexion.php");
$id = $_GET['id'];

// Si le formulaire de modification est envoyé
if (isset($_POST['valider'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    
    // Modifier (UPDATE)
    $b = mysqli_query($c, "UPDATE etudiants SET nom='$nom', prenom='$prenom' WHERE id=$id");
    header("Location: index.php");
}

// Récupérer les anciennes infos de l'étudiant
$res = mysqli_query($c, "SELECT * FROM etudiants WHERE id=$id");
$etudiant = mysqli_fetch_assoc($res);
?>

<h2>Modifier l'étudiant</h2>
<form method="POST">
    <input type="text" name="nom" value="<?php echo $etudiant['nom']; ?>" required>
    <input type="text" name="prenom" value="<?php echo $etudiant['prenom']; ?>" required>
    <button type="submit" name="valider">Enregistrer</button>
</form>