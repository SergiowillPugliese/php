<?php
require ('index.php');
require ('Abbonamento.php');
$abbonamento = new Abbonamento();

if($_SERVER['REQUEST_METHOD']==='POST'){
    $abbonamento->save3();
    header('Location:passo4.php');
    die();
}
echo $abbonamento->div0();
echo $abbonamento->display3();
echo $abbonamento->div1();
