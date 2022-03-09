<?php
require ('index.php');
require ('Abbonamento.php');
$abbonamento = new Abbonamento();

if($_SERVER['REQUEST_METHOD']==='POST'){
    $abbonamento->saveEsercizio();
    header('Location:passo3.php');
    die();
}
echo $abbonamento->div0();
echo $abbonamento->displayEsercizio();
echo $abbonamento->div1();

