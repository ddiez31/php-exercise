<?php

$mois = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];

echo var_dump($mois);

$mois[7]='Août';
echo '<hr>correction orthographe sur valeur août: <br>';
echo var_dump($mois);

?>