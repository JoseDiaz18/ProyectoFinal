<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class ventas
 * @package App\Models
 * @version October 30, 2020, 7:36 pm UTC
 *
 * @property \App\Models\restaurants $idUserRestaurant
 * @property \App\Models\menu $idMenu
 * @property \App\Models\users $idUser
 * @property string $hora
 * @property integer $id_user_restaurant
 * @property integer $id_menu
 * @property integer $id_user
 * @property string $promociones
 */
class ventas extends Model
{

    public $table = 'ventas';
    



    public $fillable = [
        'hora',
        'id_user_restaurant',
        'id_menu',
        'id_user',
        'promociones'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'hora' => 'date',
        'id_user_restaurant' => 'integer',
        'id_menu' => 'integer',
        'id_user' => 'integer',
        'promociones' => 'string'
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
    public function idUserRestaurant()
    {
        return $this->belongsTo(\App\Models\restaurants::class, 'id_user_restaurant', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idMenu()
    {
        return $this->belongsTo(\App\Models\menu::class, 'id_menu', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idUser()
    {
        return $this->belongsTo(\App\Models\users::class, 'id_user', 'id');
    }
}
