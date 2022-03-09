<?php
require ('index.php');
require ('Abbonamento.php');
$abbonamento = new Abbonamento();

echo $abbonamento->div0();
echo $abbonamento->display0();
echo $abbonamento->div1();
