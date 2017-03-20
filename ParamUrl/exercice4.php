<?php

echo 'Langage avec serveur: ' . htmlspecialchars($_GET["langage"].' - '.$_GET["serveur"]).'<hr>';

if(!empty($_GET["langage"])) echo '<br>Le langage utilisé est: '.$_GET["langage"].'<br>';
if(!empty($_GET["serveur"])) echo '<br>Le serveur utilisé est: '.$_GET["serveur"].'<br>';

?>