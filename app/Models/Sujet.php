<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sujet
{
    protected $tabObserver;
    function __construct() {
        $this->tabObserver = [];
    }

    function addObserver($observeur)  {
        array_push($this->tabObserver, $observeur);
    }

    function deleteLasteObserver() {
        return array_pop($this->tabObserver);
    }

    function notify() {
        foreach($this->tabObserver as $observer) {
            $observer->update();
        }
    }

    function showAll() {
        foreach($this->tabObserver as $observer) {
            $observer->show();
        }
    }

}
