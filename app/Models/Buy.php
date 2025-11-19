<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buy extends Model
{
    protected $primaryKey = 'compra_id';

    public function products() {
        return $this->belongsToMany(Game::class, 'buy_have_products', 'compra_fk', 'juego_fk', 'compra_id');
    }
}
