<?php

require_once("animal.php");

class Ape extends animal{
    public $legs = 4;
    public function yell(){
        echo "Auooo";
    }
}