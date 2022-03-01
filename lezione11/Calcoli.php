<?php

class Calcoli
{
    private $a;
    private $b;

    function __construct($x, $y)
    {
        $this->a = $x;
        $this->b = $y;
    }

    function  massimo()
    {
        if ($this->a > $this->b) {
            return $this->a;
        } else {
            return $this->b;
        }
    }
    function update($x,$y)
    {
        $this -> a = $x;
        $this -> b = $y;
    }

}


$operazioni = new calcoli(5, 3);
echo 'il massimo è: ' . $operazioni->massimo() . '<br>';
$operazioni->update(10,4);
$massimo = $operazioni -> massimo();
printf('il massimo ora vale %d', $massimo);