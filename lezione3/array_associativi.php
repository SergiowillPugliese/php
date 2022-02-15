<?php

$personaA = ['name' => 'Gianni', 'surname' => 'Bianchi'];

echo $personaA['name'] . '<br>';

$persone[]=$personaA;

//se voglio aggiungere Paola Verdi

$persone[]=['name' => 'Paola', 'surname' => 'verdi'];

echo $persone[1]['name'];

//ma se volessi gestire la mail posso aggiungerla

// aggiungo la mail di Gianni 

$persone[0]['email']= 'gianni.bianchi@gmail.com';

print_r($persone);

//l'alternativa sarebbe

$persone[0]=[
    'name'=>$persone[0]['name'],
    'surname'=>$persone[0]['surname'],
    'email'=>'gianni.bianchi@gmail.com'
];


// se voglio aggiungere i telefoni

$persone[0]['tel']=['0116635255','011552525'];

print_r($persone);



