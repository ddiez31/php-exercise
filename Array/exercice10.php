<?php

$regionHDF = array('Aisne' => '02', 'Nord' => 59, 'Oise' => 60, 'Pas-de-Calais' => 62, 'Somme' => 80);

   foreach ($regionHDF as $value => $key){ 
       echo ('<br>Le département '.$value.' a le numéro '.$key.'.');
    }

?>
