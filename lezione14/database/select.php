<?php

$mysqli = new mysqli('localhost','lezione15','lezione15', 'lezione15');

//echo $mysqli->host_info;
echo "<pre>";
$sql = 'SELECT * 
from users limit 10';



$result = $mysqli->query($sql);

//print_r($result);


while($row = $result->fetch_assoc()){
  echo '<li>' . $row['firstname'] . ' ' . $row['lastname'] . ' ' . $row['email'] . '</li>';
}

