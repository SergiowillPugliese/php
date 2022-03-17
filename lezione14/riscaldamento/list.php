<?php
include 'config.php';
include 'form.php';


$form= new Form($path);
echo $form->list_by_id($_GET['id']);