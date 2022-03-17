<?php

// approccio procedurale
$link = mysqli_connect('localhost','lezione15','lezione15', 'lezione15');

echo mysqli_get_host_info($link);

mysqli_close($link);


echo '<hr>';

// approccio ad oggetti

$mysqli = new mysqli('localhost','lezione15','lezione15', 'lezione15');

echo $mysqli->host_info;

$mysqli->close();




