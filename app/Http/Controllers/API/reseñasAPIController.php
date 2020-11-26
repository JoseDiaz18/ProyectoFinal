<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatereseñasAPIRequest;
use App\Http\Requests\API\UpdatereseñasAPIRequest;
use App\Models\reseñas;
use App\Repositories\reseñasRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class reseñasController
 * @package App\Http\Controllers\API
 */

class reseñasAPIController extends AppBaseController
{
    /** @var  reseñasRepository */
    private $reseñasRepository;

    public function __construct(reseñasRepository $reseñasRepo)
    {
        $this->reseñasRepository = $reseñasRepo;
    }

    /**
     * Display a listing of the reseñas.
     * GET|HEAD /reseñas
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $reseñas = $this->reseñasRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($reseñas->toArray(), 'Reseñas retrieved successfully');
    }

    /**
     * Store a newly created reseñas in storage.
     * POST /reseñas
     *
     * @param CreatereseñasAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatereseñasAPIRequest $request)
    {
        $input = $request->all();

        $reseñas = $this->reseñasRepository->create($input);

        return $this->sendResponse($reseñas->toArray(), 'Reseñas saved successfully');
    }

    /**
     * Display the specified reseñas.
     * GET|HEAD /reseñas/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var reseñas $reseñas */
        $reseñas = $this->reseñasRepository->find($id);

        if (empty($reseñas)) {
            return $this->sendError('Reseñas not found');
        }

        return $this->sendResponse($reseñas->toArray(), 'Reseñas retrieved successfully');
    }

    /**
     * Update the specified reseñas in storage.
     * PUT/PATCH /reseñas/{id}
     *
     * @param int $id
     * @param UpdatereseñasAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatereseñasAPIRequest $request)
    {
        $input = $request->all();

        /** @var reseñas $reseñas */
        $reseñas = $this->reseñasRepository->find($id);

        if (empty($reseñas)) {
            return $this->sendError('Reseñas not found');
        }

        $reseñas = $this->reseñasRepository->update($input, $id);

        return $this->sendResponse($reseñas->toArray(), 'reseñas updated successfully');
    }

    /**
     * Remove the specified reseñas from storage.
     * DELETE /reseñas/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var reseñas $reseñas */
        $reseñas = $this->reseñasRepository->find($id);

        if (empty($reseñas)) {
            return $this->sendError('Reseñas not found');
        }

        $reseñas->delete();

        return $this->sendSuccess('Reseñas deleted successfully');
    }
}
