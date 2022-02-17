<?php
include ('function.php');
include ('mie_funzioni.php');

require ('intestazione.html');

echo "<br>corpo del file php<br>";

include ('piedino.html');

//per evitare che si rompa inserendo due funzioni uguali, usare
// sempre include_onece