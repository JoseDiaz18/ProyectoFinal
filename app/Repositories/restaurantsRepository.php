<?php

namespace App\Repositories;

use App\Models\restaurants;
use App\Repositories\BaseRepository;

/**
 * Class restaurantsRepository
 * @package App\Repositories
 * @version October 16, 2020, 2:16 am UTC
*/

class restaurantsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nit',
        'nombre',
        'direccion',
        'telefono',
        'correo'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return restaurants::class;
    }
}
