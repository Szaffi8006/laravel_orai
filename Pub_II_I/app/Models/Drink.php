<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    public function type() {
        
        return $this->belongsTo(Type::class);
    }

    public function package() {
        
        return $this->belongsTo(Package::class);
    }


}
