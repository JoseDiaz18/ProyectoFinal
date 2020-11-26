<?php

namespace App\Repositories;

use App\Models\ventas;
use App\Repositories\BaseRepository;

/**
 * Class ventasRepository
 * @package App\Repositories
 * @version October 30, 2020, 7:36 pm UTC
*/

class ventasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'hora',
        'id_user_restaurant',
        'id_menu',
        'id_user',
        'promociones'
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
        return ventas::class;
    }
}
