<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire</title>
</head>
<body>

<?php
$DisplayForm = true;
if(isset($_POST['submit'])){
    $DisplayForm = false;
    echo($_POST['civilite'].' '.$_POST['nom'].' '.$_POST['prenom']);
}
if ($DisplayForm) {
?>
    <h1>Formulaire d'inscription</h1>
    <form method="POST" action="/user.php">
    <select name="civilite">
        <option value="Mlle">Mlle</option>
        <option value="Mme">Mme</option>
        <option value="Mr">Mr</option>
    </select>
            <label for="name">Nom:</label>
            <input type="text" name="nom" />
            <label for="name">Prénom:</label>
            <input type="text" name="prenom" />
            <button type="submit" name="submit">Inscription</button>
    </form>
<?php
}
?>

</body>
</html>