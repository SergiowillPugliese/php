<?php
//uso di array_map
echo 'uso di array_map()<br/>'; 

$nomi= ['Pino', 'Gino','Rino'];
echo '<pre>';
var_dump($nomi);
echo "applico strtolower"; 
$nomi= array_map('strtolower', $nomi);
echo '<pre>';
var_dump($nomi);
echo '<br><br>';


echo 'array reduce';
function prova ($stringa, $item){
    return $stringa . '<li>' . $item . '</li>';
}

echo array_reduce($nomi, 'prova');
echo '<br><br>';




echo ' uso di array_flip()<br/>';
$frutti=[
    'mela' =>'giallo',
    'pera'=> 'verde',
    'ciliegia' =>'rosso'
];

echo '<pre>';
var_dump($frutti);
$colori= array_flip($frutti);
echo '<pre>';
var_dump($colori);
echo '<br><br>';



echo 'uso di array_merge()<br/>';
$finale=array_merge($frutti, $colori);
echo '<pre>';
var_dump($finale);

echo 'var_dump(array_merge([10, 11], [5, 6]));<br/>' ;
echo '<pre>';
var_dump(array_merge([10, 11], [5, 6]));
echo '<br><br>';



echo 'uso di array_reduce()</br>';

function lista($stringa, $item){
    return( $stringa ."<li>$item</li>" );

}
echo '<pre>';
var_dump(array_reduce($colori,'lista' ));
echo '<br><br>';