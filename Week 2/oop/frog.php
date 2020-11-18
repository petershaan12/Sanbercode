<?php

require_once("animal.php");

class Frog extends animal{
    public $legs = 2;
    public function jump(){
        echo "hop hop";
    }
}