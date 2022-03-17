<?php
include 'config.php';
include 'form.php';

if (!empty($_GET['secret']) && $_GET['secret'] =='segretissima'){




$form= new Form($path);
echo $form->list();

} else {

    echo '<form><input type="password" name="secret">';
    echo '<input type="submit">richiesta password' ;
  echo '</form>';
}