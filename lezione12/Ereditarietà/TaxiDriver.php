<?php
//creiamo taxi driver con estensione di class user

class TaxiDriver extends User
{
	protected $license='';
	public function setLicense(string $cod){
		$this->license = $cod;
	}
	public function getLicense(){
		return $this->license ;
	}
}