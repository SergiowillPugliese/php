<?php

if ($_SERVER['REQUEST_METHOD'] ==='POST') {
    $a = $_POST['in_a'];

    $b = $_POST['in_b'];
    
    if ($a < $b) {
        # code...
        $numeri = range($a, $b);
        foreach ($numeri as $number) {
            echo $number . "  ";
        }
        }else {
        echo ('Il primo numeto è più grande del secondo');
    }
        
}


if (!empty($messaggio)) {
    echo  $messaggio ;

}
?>

<form action ='' method='POST'>
    <legend for='in_a'>inserisci numero </legend>
    <input type='text' name='in_a' value =""  > 
    <legend for='in_b'> </legend>
    <input type='text' name='in_b' value ="" >
    <input type='submit'>
</form>
