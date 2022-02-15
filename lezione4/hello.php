<?php
echo "Hello World! Questa è la lezione 4" . "<br>"

?>

<?php 
$a=34;
$b=12;
$c=($a + $b);
echo $a . " + " . $b . " = " . $c . "<br>";
?>

<?php

for ($i=0; $i < 10; $i++) { 
    echo "la variabule $i vale: " . $i . "<br>";
}

$days=['lu','ma','me','gi','ve','sa','dom'];

foreach ($days as $day) {
    echo "giorno: " . $day . "<br>";
}

for ($i=0; $i <= 20; $i++) { 
    echo " " . $i;
}

echo "<br>";

$numbers=[4,5,9,36,3,6,5,8,6,14,8,458,5];
$size=count($numbers);

for ($i=0; $i<$size; $i++ ) { 
    echo $numbers[$i] . " ";
}

echo "<br>";

$tot=0;
foreach ($numbers as $number) {
    $tot = $tot + $number;
    //equivalente a scrivere
    //$tot += $number
}

echo "la somma vale: " . $tot;
echo "<br>";
?>

<?php
//sintassi del foreach quando usiamo un array associativo 

$colori_dei_frutti=[
    'mela'=>'rosso',
    'banana'=>'giallo',
    'pera'=>'verde',
];

//se vogliamo aggiungere un elemento

$colori_dei_frutti['arancia']='arancione';

//come posso sfogliare l'array?

foreach ($colori_dei_frutti as $colore => $colore) {
    echo $colore . "<br>";
}

foreach ($colori_dei_frutti as $frutto => $colore) {
    echo 'la ' .  $frutto . ' ha come colore ' . $colore . "<br>";
}

echo "<br>";

$frutti = array_keys($colori_dei_frutti);
 print_r($frutti);
 echo "<br>";

 foreach ($frutti as $frutto) {
     echo 'il ' . $frutto . ' ha come colore ' . $colori_dei_frutti[$frutto] . "<br>"; 
 }


