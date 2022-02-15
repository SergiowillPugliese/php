<?php
$firstcode = 'fasetutila';
$url = 'https://www.itoa.it/engim/grande-concorso.php?';

$pagina = file($url . 'firstcode='.$firstcode);

echo $pagina[18];

$secondcode = trim($pagina[18]);

$secondapagina = file_get_contents($url.'firstcode='.$firstcode.'&secondcode='.$secondcode);

echo $secondapagina;

?>