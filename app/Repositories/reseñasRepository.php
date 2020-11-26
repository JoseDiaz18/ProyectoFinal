<?php

namespace App\Repositories;

use App\Models\reseñas;
use App\Repositories\BaseRepository;

/**
 * Class reseñasRepository
 * @package App\Repositories
 * @version October 30, 2020, 7:41 pm UTC
*/

class reseñasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'detalles',
        'id_restaurant',
        'id_user'
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
        return reseñas::class;
    }
}
