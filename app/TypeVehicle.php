<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeVehicle extends Model
{
    protected $guarded=['id'];

    public function vehicle(){
        return $this->hasMany(Vehicle::class);
    }
}
