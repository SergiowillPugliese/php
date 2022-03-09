<?php
require ('index.php');
require ('Abbonamento.php');
$abbonamento = new Abbonamento();

if($_SERVER['REQUEST_METHOD']==='POST'){
    $abbonamento->save2();
    header('Location:esercizio.php');
    die();
}
echo $abbonamento->div0();
echo $abbonamento->display2();
echo $abbonamento->div1();
