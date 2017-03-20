<?php

function parameter($age, $genre) {
    if ($age >= 18) {
        if ($genre == 'homme') {
            echo '<br>'.$age.' ans / '.$genre.'<br>';
            return 'Vous êtes un homme et vous êtes majeur';
        } else if ($genre == 'femme') {
            echo '<br>'.$age.' ans / '.$genre.'<br>';
            return 'Vous êtes une femme et vous êtes majeure';
                }
    } else {
          if ($genre == 'femme') {
            echo '<br>'.$age.' ans / '.$genre.'<br>';
            return 'Vous êtes une femme et vous êtes mineure';
        } else if ( $genre == 'homme') {
            echo '<br>'.$age.' ans / '.$genre.'<br>';
            return 'Vous êtes un homme et vous êtes mineur';
        }
    }
}

echo parameter(20, 'homme');
echo parameter(20, 'femme');
echo parameter(17, 'homme');
echo parameter(17, 'femme');

?>