<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RentalStatus extends Model
{

    public function rental(){
        return $this->HasMany(Rental::class);
    }
}
