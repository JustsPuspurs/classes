<?php 
include_once("Veichle.php");

class Train extends Veichle {


    static function makeNoise(){
        echo "Choo CHOOO!!! <br>";
    }

    public function getMilage(){
        return $this->$milage;
    }
}
?>