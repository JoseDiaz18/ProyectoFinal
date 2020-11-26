<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class promociones
 * @package App\Models
 * @version October 30, 2020, 7:25 pm UTC
 *
 * @property \App\Models\restaurants $id
 * @property \App\Models\menu $menu
 * @property string $descripcion
 * @property number $valor_descuento
 * @property integer $id_user_restaurante
 * @property integer $id_menu
 */
class promociones extends Model
{

    public $table = 'promociones';
    



    public $fillable = [
        'descripcion',
        'valor_descuento',
        'id_user_restaurante',
        'id_menu'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'descripcion' => 'string',
        'valor_descuento' => 'double',
        'id_user_restaurante' => 'integer',
        'id_menu' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function id()
    {
        return $this->belongsTo(\App\Models\restaurants::class, 'id', 'id_user_restaurante');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     **/
    public function menu()
    {
        return $this->hasOne(\App\Models\menu::class, 'id', 'id_menu');
    }
}
