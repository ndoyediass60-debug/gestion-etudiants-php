<?php include("connexion.php"); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion des Étudiants</title>
</head>
<body>
    <h2>Ajouter un étudiant</h2>
    <form action="ajouter.php" method="POST">
        <input type="text" name="nom" placeholder="Nom" required>
        <input type="text" name="prenom" placeholder="Prénom" required>
        <button type="submit">Ajouter</button>
    </form>

    <h2>Liste des étudiants</h2>
    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Actions</th>
        </tr>
        <?php
        // Afficher (SELECT)
        $g = mysqli_query($c, "SELECT * FROM etudiants");
        while ($ligne = mysqli_fetch_assoc($g)) {
            echo "<tr>";
            echo "<td>" . $ligne['id'] . "</td>";
            echo "<td>" . $ligne['nom'] . "</td>";
            echo "<td>" . $ligne['prenom'] . "</td>";
            echo "<td>
                    <a href='modifier.php?id=" . $ligne['id'] . "'>Modifier</a> | 
                    <a href='supprimer.php?id=" . $ligne['id'] . "'>Supprimer</a>
                  </td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>