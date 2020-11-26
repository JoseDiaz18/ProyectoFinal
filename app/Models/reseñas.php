<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class reseñas
 * @package App\Models
 * @version October 30, 2020, 7:41 pm UTC
 *
 * @property \App\Models\restaurants $idRestaurant
 * @property \App\Models\users $users
 * @property string $detalles
 * @property integer $id_restaurant
 * @property integer $id_user
 */
class reseñas extends Model
{

    public $table = 'reseñas';
    



    public $fillable = [
        'detalles',
        'id_restaurant',
        'id_user'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'detalles' => 'string',
        'id_restaurant' => 'integer',
        'id_user' => 'integer'
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
    public function idRestaurant()
    {
        return $this->belongsTo(\App\Models\restaurants::class, 'id_restaurant', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     **/
    public function users()
    {
        return $this->hasOne(\App\Models\users::class, 'id_user', 'id');
    }
}
