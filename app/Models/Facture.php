<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Facture
{
    private $facture = 0;

    function __construct() {
    }


    public function add($tabVoiture) {
        foreach ($tabVoiture as $voiture) {
            $this->facture += $voiture->getPrice();

        }
    }
}
