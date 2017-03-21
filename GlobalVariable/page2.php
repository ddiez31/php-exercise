<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Global Variable</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- CSS -->
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />

</head>
<body>

<?php
session_start();
echo 'nom: '.($_SESSION['nom'] = 'Diez').'<br>';
echo 'prenom: '.($_SESSION['prenom'] = 'David').'<br>';
echo ($_SESSION['age'] = 39).' ans<br>';
 
?>
<a href="index.php">Page accueil</a>


</body>
</html>