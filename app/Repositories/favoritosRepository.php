<?php

namespace App\Repositories;

use App\Models\favoritos;
use App\Repositories\BaseRepository;

/**
 * Class favoritosRepository
 * @package App\Repositories
 * @version October 30, 2020, 7:04 pm UTC
*/

class favoritosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre_plato',
        'descripcion',
        'recomendaciones',
        'calificacion',
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
        return favoritos::class;
    }
}
