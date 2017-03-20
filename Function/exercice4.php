<?php

function parameter($num1, $num2) {
    if ($num1 > $num2) {
    echo '<br>'.$num1.' / '.$num2.'<br>';
    return 'Le 1er nombre est plus grand';
    } else if ($num1 < $num2) {
        echo '<br>'.$num1.' / '.$num2.'<br>';
        return 'Le premier nombre est plus petit';
    } else {
        echo '<br>'.$num1.' / '.$num2.'<br>';
        return 'Les deux nombres sont identiques';
    }
}

echo parameter(13, 7);
echo parameter(2, 18);
echo parameter(5, 5);

?>