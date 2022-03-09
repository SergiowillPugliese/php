<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


</body>
</html>


<?php
//blocco di codice per riconoscere che il php deve ricevere
//dei dati

if ($_SERVER['REQUEST_METHOD']=='POST'){
    $filename = 'richieste/' . uniqid() . '.txt';
    $content = '' . $_REQUEST['q'] . "\n";
    file_put_contents($filename , $content , FILE_APPEND);

    echo "dati ricevuti ";

    
} else {

?>

 <form action="" method="POST">
Inserisci i dati <input type="text" name="q"> <br>
<input type="submit">   

</form>
<?php
}