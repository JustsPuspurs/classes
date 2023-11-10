<?php

abstract class Veichle{
    public $brand;
    protected $milage = 0;

    public function __construct($brand){
        $this->brand = $brand;
        echo $this->brand . " is alive <br>";
    }

    

    abstract static function makeNoise();
}

?>