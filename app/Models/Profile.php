<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $primaryKey = 'perfil_id';
    protected $fillable = ['usuario_fk', 'avatar', 'direccion'];
}
