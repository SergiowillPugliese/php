<?php
require ('function.php');
$titolo = "<h1>lista frutti</h1>";
$frutti = ['mela', 'pera', 'banana', 'ananas', 'uva', 'mora', 'kiwi', 'arancia'];
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Una lista</title>
</head>
<body>
    <?php
    echo $titolo;
    echo '<br>';
    list_generate($frutti);
    ?>
</body>
</html>
