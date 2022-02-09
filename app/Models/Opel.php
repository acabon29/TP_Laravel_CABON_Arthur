<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Voiture;

class Opel extends Voiture
{
    protected $prix;
    protected $objet;
    public $options = ['toit ouvrant', 'siège chauffant'];
    function __construct() { 
        $this->objet = 'Opel';
        $this->prix = 1000;
    }

    function get_class()  {
        return 'Opel';
    }

    function getPrice() {
        return $this->prix;
    }

}
