<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Concession
{
    private $garage = [];


    public function add($voiture) {
        $this->garage[] = $voiture;
    }

    public function getGarage() {
        return $this->garage;
    }

    public function getIterator() {
        return new Aggregation($this->garage);
    }
}
