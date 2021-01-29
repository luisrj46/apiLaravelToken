<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $guarded=['id'];

    public function vehicle(){
        return $this->HasMany(Vehicle::class);
    }
}
