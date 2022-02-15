<?php
session_start();

//print_r($_COOKIE);


if (!empty($_SESSION['count'])) {
    $_SESSION['count']++;
} else {
    $_SESSION['count']=1;
}

echo 'il conteggio vale: ' . $_SESSION['count'];

