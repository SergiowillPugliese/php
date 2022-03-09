//elencare tutti i file che sono nella cartelle richieste

<?php

$files = glob('richieste/*.txt');

//print_r($files);

//stampare tutti i file e per ognuno mettere
//un link per leggerlo e mostrare il contenuto

echo '<ul>';

foreach($files as $file){

echo '<li><a href="schede.php?file='.$file.'">' . $file . '</a></li>';

}

echo '</ul>'
?>