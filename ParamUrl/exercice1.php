<?php

echo 'Bonjour ' . htmlspecialchars($_GET["nom"].' '.$_GET["prenom"]) . '!';

if(!empty($_GET["nom"])) echo '<br>La valeur nom est: '.$_GET["nom"].'<br>';
if(!empty($_GET["prenom"])) echo '<br>La valeur prenom est: '.$_GET["prenom"].'<br>';


?>