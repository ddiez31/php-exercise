<?php

echo 'Bonjour ' . htmlspecialchars($_GET["nom"].' '.$_GET["prenom"].' '.$_GET["age"]) . '!';

if(!empty($_GET["nom"])) echo '<br>La valeur nom est: '.$_GET["nom"].'<br>';
if(!empty($_GET["prenom"])) echo '<br>La valeur prenom est: '.$_GET["prenom"].'<br>';
if(!empty($_GET["age"])) echo '<br>La valeur age est: '.$_GET["age"].'<br>';

if($_GET["age"] === null) echo '<br>La valeur age n\'existe pas<br>';
if($_GET["age"] === "") echo '<br>La valeur age est vide<br>';

?>