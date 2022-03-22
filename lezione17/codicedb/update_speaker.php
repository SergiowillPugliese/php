<?php
require 'connessionedb.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //SALVA I DATI
    $sql = 'UPDATE speakers set name = :name, title = :title, company = :company, url = :url, twitter = :twitter) 
    VALUES (:name, :title, :company, :url, :twitter)';

    $id = $_GET['id'];
    //echo 'vuoi modificare id: ' . $id; die;

    $sql = 'SELECT * FROM speakers where id=:id';
    $sth = $db->prepare($sql);
    $data = ['id' => $id];

    if (!$sth->execute($data)) {
        throw new Exception(sprintf(
            "Error PDO exec: %s",
            implode(',', $db->errorInfo())
        ));
    }
    
    header('Location: list_speakers.php');
}

$id=$_GET['id'];
echo 'vuoi modificare id: ' . $id;

$sql = 'SELECT * FROM speakers where id=:id';
$sth = $db->prepare($sql);
$data = ['id'=>$id];

$speaker = $sth->fetch(PDO::FETCH_OBJ);
//echo '<pre>';
//var_dump($speaker)

?>

<form action='' method='post'>
    <input type="hidden" name="id" value="<?= $speaker->id ?>"><br>
    name: <input type="text" name="name" value="<?= $speaker->name ?>"> <br>
    title: <input type="text" name="title" value="<?= $speaker->title ?>"> <br>
    company: <input type="text" name="company" value="<?= $speaker->company ?>"> <br>
    url: <input type="text" name="url" value="<?= $speaker->url ?>"> <br>
    twitter: <input type="text" name="twitter" value="<?= $speaker->twitter ?>"> <br>
    <input type="submit">
</form>