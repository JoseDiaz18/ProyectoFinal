<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class especialidad
 * @package App\Models
 * @version October 30, 2020, 7:20 pm UTC
 *
 * @property \App\Models\menu $menu
 * @property string $detalles
 * @property integer $id_menu
 */
class especialidad extends Model
{

    public $table = 'especialidad';
    



    public $fillable = [
        'detalles',
        'id_menu'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'detalles' => 'string',
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
        return $this->hasOne(\App\Models\menu::class, 'id', 'id_menu');
    }
}
