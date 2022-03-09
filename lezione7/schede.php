<?php

$filenome = $_GET['file'] ?? '';

echo file_get_contents($filenome);

?>