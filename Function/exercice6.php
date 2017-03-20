<?php

function parameter($lastname, $firstname, $age) {
     return 'Bonjour '.$lastname.' '.$firstname.', tu as '.$age.' ans.';
}

echo parameter('Diez', 'David', 39);

?>