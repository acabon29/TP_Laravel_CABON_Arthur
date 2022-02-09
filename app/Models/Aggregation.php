<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Aggregation
{
    public $iterateur = 0;
    public $tabVal = [];

    public function __construct($tabVoiture) {
        $this->tabVal = $tabVoiture;
    }

    public function hasnext() {
        return isset($tabVal[$iterateur]);
    }

    public function next() {
        return $tabVal[$iterateur++];
    }
}
