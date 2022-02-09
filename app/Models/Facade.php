<?php

namespace App\Models;

use App\Models\Concession;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Facade
{


    function __construct() {
    }

    public function commander () {
        $voiture1 = Factory::getInstance('opel');
        $voiture2 = Factory::getInstance('renault');
        $concession = new Concession;
        $concession->add($voiture1);
        $concession->add($voiture2);
        $facture = new Facture;
        $facture->add($concession->getGarage());
        return [$concession, $facture];
    }
}
