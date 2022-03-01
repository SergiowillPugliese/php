<?php

$files = glob('*.php');

echo '<ul>';

foreach($files as $file){

echo '<li><a href="http://localhost:8080/esame1/parte1/'.$file.'">' . $file . '</a></li>';

}

echo '</ul>'
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="String.php" method="get">
        <input type="textarea" name="testo" value="">
        <input type="submit" value="invia">
    </form>
    
</body>
</html>

