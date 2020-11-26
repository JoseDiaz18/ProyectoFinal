<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class favoritos
 * @package App\Models
 * @version October 30, 2020, 7:04 pm UTC
 *
 * @property \App\Models\menu $menu
 * @property \App\Models\menu $menu1
 * @property integer $nombre_plato
 * @property integer $descripcion
 * @property integer $recomendaciones
 * @property integer $calificacion
 * @property integer $id_menu
 */
class favoritos extends Model
{

    public $table = 'favoritos';
    



    public $fillable = [
        'nombre_plato',
        'descripcion',
        'recomendaciones',
        'calificacion',
        'id_menu'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre_plato' => 'integer',
        'descripcion' => 'integer',
        'recomendaciones' => 'integer',
        'calificacion' => 'integer',
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
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     **/
    public function menu()
    {
        return $this->hasOne(\App\Models\menu::class, 'nombre', 'nombre_plato');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     **/
    public function menu1()
    {
        return $this->hasOne(\App\Models\menu::class, 'id', 'id_menu');
    }
}
