<?php

$regionHDF = array(02 => 'Aisne', 59 => 'Nord', 60 => 'Oise', 62 => 'Pas-de-Calais', 80 => 'Somme');

echo var_dump($regionHDF);

$regionHDF['Marne'] = 51;

echo '<hr>ajout du département de la ville de Reims: ';
echo var_dump($regionHDF);

?>