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
    <strong>
<?php
echo 'Navigateurs utilisés: '
?>
</strong>
<span class="user">
<?php
echo $_SERVER['HTTP_USER_AGENT'].'<br>';
?>
</span>
<em>
<span class="ip">
    <?php
echo 'Votre adresse IP est: '
?>
</em>
</span>
<?php
echo $_SERVER['REMOTE_ADDR'].'<br>';
?>
<strong><em>
    <?php
echo 'Vous êtes sur le serveur: '
?>
</strong></em>
<span class="server">
<?php
echo $_SERVER['SERVER_NAME'].'<br>';
?>
</span>
<hr>
<?php
session_start();
$_SESSION['nom'] = 'Diez';
$_SESSION['prenom'] = 'David';
$_SESSION['age'] = 39;
 
?>
<a href="page2.php">Page suivante</a>



</body>
</html>