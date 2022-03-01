<?php

class Car {
    private $model = '';
    private $manufacturer = '';

    function setModel(string $modello){
        $this -> model = $modello;
    }

    function setManufacturer(string $casa){
        $this -> manufacturer = $casa;
    }

    function getData(): string {
        return 'il modello è: ' . $this -> model . '<br>' . ' prodotto dalla casa: ' . $this -> manufacturer;  
    }
}

$auto = new Car();
$auto -> setModel('Punto');
$auto -> setManufacturer('Fiat');

echo $auto -> getData();
?>