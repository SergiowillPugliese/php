<?php

try {
	$db = new PDO('mysql:host=localhost;dbname=lezione17;charset=utf8mb4', 'lezione17', 'lezione17');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (PDOException $e) {
	throw new Exception(sprintf(
		"PDO connection failed: %s\n", $e->getMessage()
	));
}


//var_dump($db);


