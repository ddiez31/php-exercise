<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire</title>
</head>
<body>

<?php
$displayForm = true;
if (isset($_POST['submit'])) {
    $displayForm = false;
    echo($_POST['civilite'].' '.$_POST['nom'].' '.$_POST['prenom'].' '.$_POST['file']);
    $path_ext = pathinfo($_POST['file']);
    $ext = $path_ext['extension'];
    echo '<br>';
    if ($ext !== "pdf"){
        try {
            throw new Exception("Ce n'est pas un fichier PDF");
        } catch(Exception $e) {
            echo $e->getMessage();
        }
    } else {
        echo "C'est un fichier PDF";
    }
}
if ($displayForm) {
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
            <label for="file">Fichier:</label>
            <input type="file" name="file" />
            <button type="submit" name="submit">Inscription</button>
    </form>
<?php
}
?>

</body>
</html>