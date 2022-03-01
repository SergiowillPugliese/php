<?php

if (isset($_GET['testo'])) {
    echo $_GET['testo'] . "<br>";
    echo strtoupper($_GET["testo"]) . '<br>';
    echo ucfirst($_GET["testo"]). '<br>';
    echo 'parametro ricevuto: ' . $_GET["testo"];
}

?>