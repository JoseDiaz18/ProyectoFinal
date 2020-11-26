<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class restaurants
 * @package App\Models
 * @version October 16, 2020, 2:16 am UTC
 *
 * @property string $nit
 * @property string $nombre
 * @property string $direccion
 * @property integer $telefono
 * @property string $correo
 */
class restaurants extends Model
{

    public $table = 'restaurants';
    



    public $fillable = [
        'nit',
        'nombre',
        'direccion',
        'telefono',
        'correo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nit' => 'string',
        'nombre' => 'string',
        'direccion' => 'string',
        'telefono' => 'integer',
        'correo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
