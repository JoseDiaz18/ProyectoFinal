<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class menu
 * @package App\Models
 * @version October 30, 2020, 6:59 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $restaurants
 * @property string $nombre
 * @property string $detalles
 * @property number $calificacion
 * @property number $valor
 * @property string $promociones
 * @property integer $id_user_restaurant
 */
class menu extends Model
{

    public $table = 'menu';
    



    public $fillable = [
        'nombre',
        'detalles',
        'calificacion',
        'valor',
        'promociones',
        'id_user_restaurant'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'detalles' => 'string',
        'calificacion' => 'double',
        'valor' => 'double',
        'promociones' => 'string',
        'id_user_restaurant' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function restaurants()
    {
        return $this->hasMany(\App\Models\restaurants::class, 'id', 'id_user_restaurant');
    }
}
