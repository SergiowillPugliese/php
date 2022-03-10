<?php
//echo '<Pre>';
//var_dump($_FILES);

$uploaddir = 'iscrizioni/';
$uploadfile = $uploaddir . basename($_FILES['fileToUpload']['name']);

if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
} else {
    echo "error";
}
