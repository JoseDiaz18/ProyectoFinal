<?php

namespace App\Repositories;

use App\Models\menu;
use App\Repositories\BaseRepository;

/**
 * Class menuRepository
 * @package App\Repositories
 * @version October 30, 2020, 6:59 pm UTC
*/

class menuRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'detalles',
        'calificacion',
        'valor',
        'promociones',
        'id_user_restaurant'
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
        return menu::class;
    }
}
