<?php

session_start();

//devo segnare la richiesta del cliente


//costruisco un array di banner per ogni cliente
//e gli consento di toglierli

//definisco un array che contiene tutti gli indici possibili
//[0,1,2,3,4,5]

$id = $_GET['id'];

if(empty($_SESSION['valid_ids'])){
    $_SESSION['valid_ids']=array_keys($banners);
}
unset($_SESSION['valid_ids'][$id]);

$_SESSION['valid_ids'] = array_filter($_SESSION['valid_ids']);

//memorizzo il valore indicato dall'utente 


//lo riporto alla pagina principale
header('location: page.php');
die();


