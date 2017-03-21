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
<?php
  if(isset($_COOKIE['moncookie'])) {
      echo "Le cookie envoyé s'appelle moncookie et sa valeur est : ".$_COOKIE['moncookie'];
    } else {
      echo "aucun cookie n'a été trouvé sur cet ordinateur";
    }
?>
<hr>
<a href="connexion.php">Espace connecté</a>
<hr>
<a href="index.php">Accueil</a>

</body>
</html>