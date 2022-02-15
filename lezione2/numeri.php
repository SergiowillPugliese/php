<h1>Numeri</h1>
<?php

$a = 1;
echo 'la variabile $a vale:' . $a; //il punto concatena
echo "<br>";
echo ++$a;
echo "<br>";
echo $a++;
echo "<br>";
echo $a;
?>

<!-- /* Double, esercizi
definire due variabili di tipo float (double) con due decimali:
costo orario
durata
e calcolarne il costo totale come prodotto del costo orario e delle durata
stampare il risultato a video con echo 
arrotondare il risultato a due decimali */ -->

<h1>Float php</h1>

<?php

$costo_orario = 23.67;
$durata = 45.34;

$costo_totale = $costo_orario * $durata;

echo $costo_totale;
echo "<br>";
echo round($costo_totale,2);
echo "<br>";

/* esercizio: invece di usare la funzione round che arrotonda,
usare la funzione format e stampare due decimali */

echo number_format($costo_totale,2,'.',',');
