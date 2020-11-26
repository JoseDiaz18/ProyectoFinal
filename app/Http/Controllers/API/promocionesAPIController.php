<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatepromocionesAPIRequest;
use App\Http\Requests\API\UpdatepromocionesAPIRequest;
use App\Models\promociones;
use App\Repositories\promocionesRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class promocionesController
 * @package App\Http\Controllers\API
 */

class promocionesAPIController extends AppBaseController
{
    /** @var  promocionesRepository */
    private $promocionesRepository;

    public function __construct(promocionesRepository $promocionesRepo)
    {
        $this->promocionesRepository = $promocionesRepo;
    }

    /**
     * Display a listing of the promociones.
     * GET|HEAD /promociones
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $promociones = $this->promocionesRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($promociones->toArray(), 'Promociones retrieved successfully');
    }

    /**
     * Store a newly created promociones in storage.
     * POST /promociones
     *
     * @param CreatepromocionesAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatepromocionesAPIRequest $request)
    {
        $input = $request->all();

        $promociones = $this->promocionesRepository->create($input);

        return $this->sendResponse($promociones->toArray(), 'Promociones saved successfully');
    }

    /**
     * Display the specified promociones.
     * GET|HEAD /promociones/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var promociones $promociones */
        $promociones = $this->promocionesRepository->find($id);

        if (empty($promociones)) {
            return $this->sendError('Promociones not found');
        }

        return $this->sendResponse($promociones->toArray(), 'Promociones retrieved successfully');
    }

    /**
     * Update the specified promociones in storage.
     * PUT/PATCH /promociones/{id}
     *
     * @param int $id
     * @param UpdatepromocionesAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatepromocionesAPIRequest $request)
    {
        $input = $request->all();

        /** @var promociones $promociones */
        $promociones = $this->promocionesRepository->find($id);

        if (empty($promociones)) {
            return $this->sendError('Promociones not found');
        }

        $promociones = $this->promocionesRepository->update($input, $id);

        return $this->sendResponse($promociones->toArray(), 'promociones updated successfully');
    }

    /**
     * Remove the specified promociones from storage.
     * DELETE /promociones/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var promociones $promociones */
        $promociones = $this->promocionesRepository->find($id);

        if (empty($promociones)) {
            return $this->sendError('Promociones not found');
        }

        $promociones->delete();

        return $this->sendSuccess('Promociones deleted successfully');
    }
}
