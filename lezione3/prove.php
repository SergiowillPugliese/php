<?php
//un array di nomi


$nomi = ['Paola', 'Marco'];
echo $nomi[0] . '<br>';

//voglio aggiungere un nuovo elemento
$nomi[] = 'Maria';
echo $nomi[2];

//calcola quanti elementi ci sono
$num_elementi = count($nomi) . '<br>';
echo $num_elementi;

//prendi l'elemento corrente
//var_dump stampa il contenuto della variabile
echo current($nomi) . '<br>';

echo next($nomi) . '<br>';

var_dump($nomi);

echo '</pre>';

//elimina un elemento
unset($nomi[1]);
echo '<pre>';
var_dump($nomi);
echo '</pre>';

//usiamo come indice una variabile
$i = 0;

echo $nomi[$i] . '<br>';
$i++;
$i++; //ora i vale 2

echo $nomi[$i] . '<br>';

//un array può contenere anche array
$personaA = ['Gianni', 'Bianchi'];
$personaB = ['Paola', 'Verdi'];

$persone = [$personaA, $personaB];

echo '<pre>';
var_dump($persone);

//voglio stampare il nome della seconda persona;
/* echo $persone[1][0]; */
echo 'il nome della seconda persona: ' . $persone[1][0];

print_r($persone);

//aggiungere un elemento all'array
$personaC = ['Antonio', 'Rossi'];
$persone[][]=$personaC;
print_r($persone);

//oppure
$persone[]=['Maria', 'Verdi'];

print_r($persone);

//se volessi correggere Paola Verdi in Paolo Verdi come faccio?
$persone[1][0]='Paolo';

print_r($persone);

//possiamo creare array con n dimensioni e con tipi arbitrari
//generando dei mostri

$persone[1][0] = ['Matteo',['matteo@gmail.com',['011114584', '546545646']]];

print_r($persone);



