<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateespecialidadAPIRequest;
use App\Http\Requests\API\UpdateespecialidadAPIRequest;
use App\Models\especialidad;
use App\Repositories\especialidadRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class especialidadController
 * @package App\Http\Controllers\API
 */

class especialidadAPIController extends AppBaseController
{
    /** @var  especialidadRepository */
    private $especialidadRepository;

    public function __construct(especialidadRepository $especialidadRepo)
    {
        $this->especialidadRepository = $especialidadRepo;
    }

    /**
     * Display a listing of the especialidad.
     * GET|HEAD /especialidads
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $especialidads = $this->especialidadRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($especialidads->toArray(), 'Especialidads retrieved successfully');
    }

    /**
     * Store a newly created especialidad in storage.
     * POST /especialidads
     *
     * @param CreateespecialidadAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateespecialidadAPIRequest $request)
    {
        $input = $request->all();

        $especialidad = $this->especialidadRepository->create($input);

        return $this->sendResponse($especialidad->toArray(), 'Especialidad saved successfully');
    }

    /**
     * Display the specified especialidad.
     * GET|HEAD /especialidads/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var especialidad $especialidad */
        $especialidad = $this->especialidadRepository->find($id);

        if (empty($especialidad)) {
            return $this->sendError('Especialidad not found');
        }

        return $this->sendResponse($especialidad->toArray(), 'Especialidad retrieved successfully');
    }

    /**
     * Update the specified especialidad in storage.
     * PUT/PATCH /especialidads/{id}
     *
     * @param int $id
     * @param UpdateespecialidadAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateespecialidadAPIRequest $request)
    {
        $input = $request->all();

        /** @var especialidad $especialidad */
        $especialidad = $this->especialidadRepository->find($id);

        if (empty($especialidad)) {
            return $this->sendError('Especialidad not found');
        }

        $especialidad = $this->especialidadRepository->update($input, $id);

        return $this->sendResponse($especialidad->toArray(), 'especialidad updated successfully');
    }

    /**
     * Remove the specified especialidad from storage.
     * DELETE /especialidads/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var especialidad $especialidad */
        $especialidad = $this->especialidadRepository->find($id);

        if (empty($especialidad)) {
            return $this->sendError('Especialidad not found');
        }

        $especialidad->delete();

        return $this->sendSuccess('Especialidad deleted successfully');
    }
}
