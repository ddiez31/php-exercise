<!DOCTYPE html>
<?php 
setcookie('moncookie', $_POST['login'].' '.$_POST['pass'], time()+10);
?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire</title>
</head>
<body>
  <h1>Connexion</h1>
    <form method="POST" action="">
            <label for="login">Login:</label>
            <input type="text" name="login" />
            <label for="pass">Mot de passe:</label>
            <input type="password" name="pass" />
            <button type="submit">Connexion</button>
    </form>

<hr>
<a href="connexion.php">Espace connecté</a>

</body>
</html>