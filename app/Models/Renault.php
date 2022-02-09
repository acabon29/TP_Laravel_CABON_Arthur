<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Voiture;

class Renault extends Voiture
{
    protected $prix;
    protected $objet;
    public $options = ['siège chauffant'];
    function __construct() {
        $this->objet = 'Renault';
        $this->prix = 1200;
    }

    function get_class()  {
        return 'Renault';
    }

    function getPrice() {
        return $this->prix;
    }

}
