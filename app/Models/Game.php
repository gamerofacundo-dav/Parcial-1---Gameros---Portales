<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Game extends Model
{
   protected $primaryKey = 'juego_id';
   protected $fillable = ['titulo', 'fecha_lanzamiento', 'descripcion', 'precio', 'clases', 'plataforma', 'portada'];

   /**
    * Accesor y Mutator que recorta de un producto y lo recorta
    *  @return string La descripcion del producto recortada. 
    */
   public function recortarDescripcion():Attribute {
      
      return Attribute::make(
         get: fn() => Str::limit($this->descripcion, 150),
         set: fn($value) => $value
      );
   }

   /**
    * Función que recibe el precio de un producto y lo formatea.
    * @param int $precio Precio del producto
    *  @return Attribute El precio formateado.
    */
   public function precioFormateado():Attribute {
      // return $precio = number_format($precio, 2, ',', '.');

      // NOTA A FUTURO
      // El formateo lo definimos en el GET, porque es de que manera obtenemos el precio, luego seteamos el valor tal cual lo recibimos y listo. No es al reves como yo pensaba.
      return Attribute::make(
         get: fn () => number_format($this->precio, 2, ',', '.'),
         set: fn ($value) => $value, 
      );
   }


   public function bg_classes(): HasMany {
      // Defino la FK, porque sino hasMany me toma la fk como game_juego_fk, y claramente eso no existe en la BBDD. 
      // RECORDA HACERLO SIEMPRE QUE TE PASE ESTO ASI NO ESTAS COMO UN BOLUDO FIJANDOTE
      return $this->hasMany(BgClass::class, 'juego_fk');
   }

   public function platforms(): BelongsToMany {
      // Me lo dejo anotado para no ovlidarme. Profe si ves esto es proque me olvidé de borrarlo :).
      // Param 1 -> Model de la otra tabla
      // Param 2 -> tabla pivot
      // Param 3 -> FK de la tabla del modelo actual
      // Param 4 -> FK de la tabla del otro modelo.
      // Param 5 -> como el id tiene nombre personalizado, escribnimos la PK 1
      // Param 6 -> "" "" "" "" "" "" """ "" """ """ """", escribimos la PK 2
      return $this->belongsToMany(Platform::class, 'games_have_platforms', 'juego_fk', 'plataforma_fk', 'juego_id', 'plataforma_id');
   }

   public function getClassesId() {

      return $this->bg_classes->pluck('clase_id')->all();
   }

   public function getPlatformsId() {
   
      return $this->platforms->pluck('plataforma_id')->all();
   }
}
