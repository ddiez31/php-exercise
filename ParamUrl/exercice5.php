<?php

echo 'Nous sommes en semaine: ' . htmlspecialchars($_GET["semaine"]).'<hr>';

if(!empty($_GET["semaine"])) echo '<br>Semaine: '.$_GET["semaine"].'<br>';

?>

