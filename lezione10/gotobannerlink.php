<?php
require('banner.php');

//riceve id del banner cliccato dall'utente
$index = $_GET['id'];

//memorizza il click su quel banner
save_banner_clicks($index);


//redirige il browser al link specifico
header('location:' . $banners[$index]['url']);

?>