<?php

//dichiarazione di un array
$week = ['mon', 'tue', 'wed', 'thu', 'fri', 'sat', 'sun'];

//come accedere ad un elemento
printf("%s %s<br>", $week[0], $week[6]);

//lo stesso posso farlo con echo
echo $week[0] . " " . $week[6] . '<br>';

//oppure
echo "$week[0] $week[6] <br>";

echo "l'array all'indice 2 contiene" . $week[2];

//riassegno l'elemento con indice 2;

$week[2]='mer'; //il giorno in italiano 

echo "l'array all'indice 2 contiene: " . $week[2] . "<br>";
