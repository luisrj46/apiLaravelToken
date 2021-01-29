<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    protected $guarded=['id'];

    public function rentail(){
        return $this->HasMany(Rental::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
