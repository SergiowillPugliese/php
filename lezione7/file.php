<?php
/* 
$testo = file('file.txt');

if ($testo === FALSE) {

    echo "errore leggendo questo benedetto file!";

} else {

    echo "penso che: " . $testo[4];
} */

//file_get_contents() legge in una stringa e non in un array

$testo = file_get_contents('file.txt');

echo $testo;
