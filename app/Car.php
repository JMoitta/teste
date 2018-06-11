<?php

namespace FederalSt;

use FederalSt\User;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        "id", "placa" , "renavam", "modelo", "marca", "ano"
      ];

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
