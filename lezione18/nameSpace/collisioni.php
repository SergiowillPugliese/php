<?php

require('Engim/corso2021/MyClass.php');
require('Engim/corso2022/MyClass.php');


//$class_2021 = new \Engim\corso2021\MyClass();
//$class_2021 -> stampa();

//$class_2022 = new \Engim\corso2022\MyClass();
//$class_2022 -> stampa();

use \Engim\Corso2021\MyClass as MyClass2021 ;
use \Engim\Corso2022\MyClass as MyClass2022 ;

$class_2021 = new MyClass2021();
$class_2022 = new MyClass2022();

$class_2021 -> stampa();
$class_2022 -> stampa();