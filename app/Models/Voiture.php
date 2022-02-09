<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;

abstract class Voiture
{
    // use HasFactory
    
    
    abstract function __construct();

    abstract function get_class();
    
    abstract function getPrice();

    public function getOptions(){
        foreach($this->options as $option){
            echo " ".$option.", ";
        }
    }

    public function getText(){
        echo $this->get_class();
        echo $this->getOptions();
    }

}
