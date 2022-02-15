<?php


/* La funzione isset() di PHP è utilizzata per verificare se una variabile è stata 
definita oppure no (il che equivale ad avere come valore NULL). 
In caso affermativo la funzione isset() restituisce TRUE, in caso contrario FALSE.*/ 

if (isset($_POST['tipoveicolo'])) {
    echo 'grazie per aver scelto la nostra offerta. Hai richiesto una ' . $_POST['tipoveicolo'] . "<br>";
    echo "hai scelto di ";

    if (isset($_POST['scelta'])) {
        echo 'aggiungere una copertura assicurativa';
    } else {
        echo 'non aggiungere una copertura assicurativa';
    }
} else {
    echo 'scegli una macchina stronzo';
}
