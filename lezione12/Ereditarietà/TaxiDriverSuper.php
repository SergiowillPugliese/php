<?php
//estendiamo taxidriver in cui definiamo il costruttore per accettare due parametri, $name $license (non obbligatorio)

class TaxiDriverSuper extends TaxiDriver
{
	protected $license='';
    public function __construct($name, $license=''){
        parent:: __construct($name);
        $this->license = $license;
    }
}