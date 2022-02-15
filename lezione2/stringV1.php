<h1>String</h1>

<?php

$a = 1;

echo $a;

echo '<br>';

/* vari modi che ho di scrivere il vaslore della 
variabile con un commento */

?>

La variabile $a vale:<?php echo $a ?> <br>
<?php // stessa cosa con sintassi abbreviata ?>
La variabile $a vale:<?= $a ?> <br>

<?php // la concatenando le stringhe di etichetta e la variabile 
echo 'La variabile $a vale:' . $a . '<br>';

// usando gli apici doppi e il carattere di escape al bisogno 
echo "La variabile \$a vale:" . $a . '<br>';

echo "La variabile \$a vale: $a" . '<br>'

?>

"strlen()"Determina la lunghezza della stringa: <?php echo strlen('buona giornata') ?> <br>

"strpos()" Determina  la posizione di una stringa 
all’interno di  una altra stringa: <?php echo strpos('la storia della gabbianella','storia') ?> <br>

"substr()" per sostituire una stringa dentro una altra stringa:
<?php echo substr('TRIS0345',4,4) ?> <br>

Strtoupper() per rendere il testo  maiuscolo
Strtolower() per rendere il testo minuscolo
 
