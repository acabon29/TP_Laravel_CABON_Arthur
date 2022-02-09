<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Singleton
{
    use HasFactory;
    
    private $count = 0;

    private static $instance = null;

    private function __construct() {
        $this->count = 0;
    }

    public function getInstance() {
        return (is_null(self::$instance) ? self::$instance = new Singleton : self::$instance);
    }

    public function increment() {
        return ++$this->count;
    }
    


}
