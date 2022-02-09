<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Strategie
{
    protected $voiture;
    protected $tva;

    public function factureLine($voiture){
        if($voiture->get_class() == "Renault"){
            $this->tva = 10;
        }
        elseif($voiture->get_class() == "Opel"){
            $this->tva = 20;
        }
        else{
            $this->tva = false;
        }
    }

    public function getFactureLine(){
        return $this->tva;
    }
}