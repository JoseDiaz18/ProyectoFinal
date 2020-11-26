<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatefavoritosAPIRequest;
use App\Http\Requests\API\UpdatefavoritosAPIRequest;
use App\Models\favoritos;
use App\Repositories\favoritosRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class favoritosController
 * @package App\Http\Controllers\API
 */

class favoritosAPIController extends AppBaseController
{
    /** @var  favoritosRepository */
    private $favoritosRepository;

    public function __construct(favoritosRepository $favoritosRepo)
    {
        $this->favoritosRepository = $favoritosRepo;
    }

    /**
     * Display a listing of the favoritos.
     * GET|HEAD /favoritos
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $favoritos = $this->favoritosRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($favoritos->toArray(), 'Favoritos retrieved successfully');
    }

    /**
     * Store a newly created favoritos in storage.
     * POST /favoritos
     *
     * @param CreatefavoritosAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatefavoritosAPIRequest $request)
    {
        $input = $request->all();

        $favoritos = $this->favoritosRepository->create($input);

        return $this->sendResponse($favoritos->toArray(), 'Favoritos saved successfully');
    }

    /**
     * Display the specified favoritos.
     * GET|HEAD /favoritos/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var favoritos $favoritos */
        $favoritos = $this->favoritosRepository->find($id);

        if (empty($favoritos)) {
            return $this->sendError('Favoritos not found');
        }

        return $this->sendResponse($favoritos->toArray(), 'Favoritos retrieved successfully');
    }

    /**
     * Update the specified favoritos in storage.
     * PUT/PATCH /favoritos/{id}
     *
     * @param int $id
     * @param UpdatefavoritosAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatefavoritosAPIRequest $request)
    {
        $input = $request->all();

        /** @var favoritos $favoritos */
        $favoritos = $this->favoritosRepository->find($id);

        if (empty($favoritos)) {
            return $this->sendError('Favoritos not found');
        }

        $favoritos = $this->favoritosRepository->update($input, $id);

        return $this->sendResponse($favoritos->toArray(), 'favoritos updated successfully');
    }

    /**
     * Remove the specified favoritos from storage.
     * DELETE /favoritos/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var favoritos $favoritos */
        $favoritos = $this->favoritosRepository->find($id);

        if (empty($favoritos)) {
            return $this->sendError('Favoritos not found');
        }

        $favoritos->delete();

        return $this->sendSuccess('Favoritos deleted successfully');
    }
}
