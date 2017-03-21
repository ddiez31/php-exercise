<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire</title>
</head>
<body>
    <h1>Formulaire d'inscription</h1>
    <form method="GET" action="/user.php">
            <label for="name">Nom:</label>
            <input type="text" name="nom" />
            <label for="name">Prénom:</label>
            <input type="text" name="prenom" />
            <button type="submit">Inscription</button>
    </form>

<?php
echo($_GET['nom'].' '.$_GET['prenom']);
?>

</body>
</html>