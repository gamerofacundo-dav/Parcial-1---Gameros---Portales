<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Game extends Model
{
   protected $primaryKey = 'juego_id';
   protected $fillable = ['titulo', 'fecha_lanzamiento', 'descripcion', 'precio'];

   /**
    * Función que recibe la descripcion de un producto y lo recorta
    * @param string $descripcion Descripcion de producto 
    *  @return string La descripcion del producto recortada. 
    */
   public static function recortarDescripcion(string $descripcion):string {
      $descripcionCorta = Str::limit($descripcion, 150);
      return $descripcionCorta;
   }

   /**
    * Función que recibe el precio de un producto y lo formatea.
    * @param int $precio Precio del producto
    *  @return string El precio formateado.
    */
   public static function formatearPrecio(int $precio):string {
      return $precio = number_format($precio, 2, ',', '.');
   }
}
