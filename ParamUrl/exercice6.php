<?php

echo 'Bâtiment et salle: ' . htmlspecialchars($_GET["batiment"].' / '.$_GET["salle"]).'<hr>';

if(!empty($_GET["batiment"])) echo '<br>Nous sommes dans le bâtiment: '.$_GET["batiment"].'<br>';
if(!empty($_GET["salle"])) echo '<br>Et dans la salle: '.$_GET["salle"].'<br>';

?>


