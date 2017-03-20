<?php

echo 'Période: ' . htmlspecialchars($_GET["dateDebut"].' - '.$_GET["dateFin"]).'<hr>';

if(!empty($_GET["dateDebut"])) echo '<br>La date de début est: '.$_GET["dateDebut"].'<br>';
if(!empty($_GET["dateFin"])) echo '<br>La date de fin est: '.$_GET["dateFin"].'<br>';

?>
