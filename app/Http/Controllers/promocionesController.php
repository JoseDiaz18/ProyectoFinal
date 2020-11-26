<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatepromocionesRequest;
use App\Http\Requests\UpdatepromocionesRequest;
use App\Repositories\promocionesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class promocionesController extends AppBaseController
{
    /** @var  promocionesRepository */
    private $promocionesRepository;

    public function __construct(promocionesRepository $promocionesRepo)
    {
        $this->promocionesRepository = $promocionesRepo;
    }

    /**
     * Display a listing of the promociones.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $promociones = $this->promocionesRepository->paginate(10);

        return view('promociones.index')
            ->with('promociones', $promociones);
    }

    /**
     * Show the form for creating a new promociones.
     *
     * @return Response
     */
    public function create()
    {
        return view('promociones.create');
    }

    /**
     * Store a newly created promociones in storage.
     *
     * @param CreatepromocionesRequest $request
     *
     * @return Response
     */
    public function store(CreatepromocionesRequest $request)
    {
        $input = $request->all();

        $promociones = $this->promocionesRepository->create($input);

        Flash::success('Promociones saved successfully.');

        return redirect(route('promociones.index'));
    }

    /**
     * Display the specified promociones.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $promociones = $this->promocionesRepository->find($id);

        if (empty($promociones)) {
            Flash::error('Promociones not found');

            return redirect(route('promociones.index'));
        }

        return view('promociones.show')->with('promociones', $promociones);
    }

    /**
     * Show the form for editing the specified promociones.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $promociones = $this->promocionesRepository->find($id);

        if (empty($promociones)) {
            Flash::error('Promociones not found');

            return redirect(route('promociones.index'));
        }

        return view('promociones.edit')->with('promociones', $promociones);
    }

    /**
     * Update the specified promociones in storage.
     *
     * @param int $id
     * @param UpdatepromocionesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatepromocionesRequest $request)
    {
        $promociones = $this->promocionesRepository->find($id);

        if (empty($promociones)) {
            Flash::error('Promociones not found');

            return redirect(route('promociones.index'));
        }

        $promociones = $this->promocionesRepository->update($request->all(), $id);

        Flash::success('Promociones updated successfully.');

        return redirect(route('promociones.index'));
    }

    /**
     * Remove the specified promociones from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $promociones = $this->promocionesRepository->find($id);

        if (empty($promociones)) {
            Flash::error('Promociones not found');

            return redirect(route('promociones.index'));
        }

        $this->promocionesRepository->delete($id);

        Flash::success('Promociones deleted successfully.');

        return redirect(route('promociones.index'));
    }
}
