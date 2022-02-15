<?php

/* scrivere un array che contenga ordinati questi elementi:

mela, pera, banana

stampare il secondo elemento

scrivere un array che contenga come chiave il nome dei frutti (mela, pera, banana) 
e come valore il colore del frutto ("giallo", "verde", "giallo")



all'array appena definito aggiungere un nuovo valore:
nocciola con colore marrone */

$frutta=['mela', 'pera', 'banana'];
print_r($frutta[1]);


$fruttichiave=['mela'=>'giallo', 'pera'=>'verde', 'banana'=>'giallo'];

$fruttichiave['nocciola']='marrone';
$fruttichiave['mandarino']='arancione';

print_r($fruttichiave);

$nome = 'pera';

echo 'il colore di ' . $nome . ' è ' . $fruttichiave[$nome] . '<br>';


