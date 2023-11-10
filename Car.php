<?php
    include_once("Veichle.php");
class Car extends Veichle {

    public function __destruct(){
        echo $this->brand . " is dead <br>";
    }
    
    static function makeNoise(){
        echo "Beep BEEEEEEP!!! <br>";
    }
}



?>