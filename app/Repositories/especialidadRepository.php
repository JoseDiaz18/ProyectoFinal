<?php

namespace App\Repositories;

use App\Models\especialidad;
use App\Repositories\BaseRepository;

/**
 * Class especialidadRepository
 * @package App\Repositories
 * @version October 30, 2020, 7:20 pm UTC
*/

class especialidadRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'detalles',
        'id_menu'
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
        return especialidad::class;
    }
}
