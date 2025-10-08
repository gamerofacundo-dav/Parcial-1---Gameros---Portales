<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
   protected $primaryKey = 'blog_id';
   protected $fillable = ['titulo', 'descripcion', 'contenido', 'autor'];
}
