<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BgClass extends Model
{
    protected $primaryKey = 'clase_id';
    protected $fillable = ['juego_fk'];
}
