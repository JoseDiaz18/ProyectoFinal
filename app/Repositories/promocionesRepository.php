<?php

namespace App\Repositories;

use App\Models\promociones;
use App\Repositories\BaseRepository;

/**
 * Class promocionesRepository
 * @package App\Repositories
 * @version October 30, 2020, 7:25 pm UTC
*/

class promocionesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descripcion',
        'valor_descuento',
        'id_user_restaurante',
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
        return promociones::class;
    }
}
