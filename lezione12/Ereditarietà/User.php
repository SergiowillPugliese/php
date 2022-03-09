<?php
//definire la classe user come da slide

class User
{
    protected $name = '';
	public function __construct($string){
		$this->name = $string;
	}
    public function getName() : string {
        return $this->name;
    }
    public function setName(string $string) {
        $this->name = $string;
    }
}
