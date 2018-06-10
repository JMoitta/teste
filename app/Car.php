<?php

namespace FederalSt;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        "placa" , "renavam", "modelo", "marca", "ano"
      ];
}
