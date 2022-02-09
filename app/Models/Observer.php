<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Observer
{
    protected $increment;
    function __construct() {
        $this->increment = 0;
    }

    function update()  {
        $this->increment++;
    }

    function show() {
        echo "Nous sommes à ".$this->increment;
    }

}
