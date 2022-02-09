<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Factory
{
    private static $instance = null;

    public static function getInstance($marque) {

        if (strtolower($marque) == 'opel') {
            return new Opel;
        } elseif (strtolower($marque)  == 'renault') {
            return new Renault;
        } else {
            echo 'erreur';
        }
    }
}
