<?php

$vero=true;

echo gettype($vero);
echo "<br>";

//stringa vuota da sempre bool falso 
$nome='';
if ($nome){
    echo 'vero';
}else{
    echo 'falso <br>';
};

/* La conversione di $string per fare il 
confronto la fa diventare un intero, 
ma siccome “nome” non è convertibile 
in un numero, diventa false che risulta 
essere uguale a 0. */

$string = "nome";

if($string == 0 ){
printf("Sorpresa!");
} else {
printf(" tutto bene" );
};

echo empty($ciaone);
