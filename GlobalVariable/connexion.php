<!DOCTYPE html>
<?php 
setcookie();
?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire</title>
</head>
<body>

<?php
  if(isset($_COOKIE['moncookie'])) {
      echo "Le cookie envoyé s'appelle moncookie et sa valeur est : ".$_COOKIE['moncookie'];
      ?>
      <hr>
      <a href="edit.php">Changement utilisateur</a>
    <?php
    } else {
      echo "aucun cookie n'a été trouvé sur cet ordinateur";
    }
?>

<hr>
<a href="index.php">Accueil</a>

</body>
</html>