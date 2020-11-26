<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatereseñasRequest;
use App\Http\Requests\UpdatereseñasRequest;
use App\Repositories\reseñasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class reseñasController extends AppBaseController
{
    /** @var  reseñasRepository */
    private $reseñasRepository;

    public function __construct(reseñasRepository $reseñasRepo)
    {
        $this->reseñasRepository = $reseñasRepo;
    }

    /**
     * Display a listing of the reseñas.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $reseñas = $this->reseñasRepository->paginate(10);

        return view('reseñas.index')
            ->with('reseñas', $reseñas);
    }

    /**
     * Show the form for creating a new reseñas.
     *
     * @return Response
     */
    public function create()
    {
        return view('reseñas.create');
    }

    /**
     * Store a newly created reseñas in storage.
     *
     * @param CreatereseñasRequest $request
     *
     * @return Response
     */
    public function store(CreatereseñasRequest $request)
    {
        $input = $request->all();

        $reseñas = $this->reseñasRepository->create($input);

        Flash::success('Reseñas saved successfully.');

        return redirect(route('reseñas.index'));
    }

    /**
     * Display the specified reseñas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $reseñas = $this->reseñasRepository->find($id);

        if (empty($reseñas)) {
            Flash::error('Reseñas not found');

            return redirect(route('reseñas.index'));
        }

        return view('reseñas.show')->with('reseñas', $reseñas);
    }

    /**
     * Show the form for editing the specified reseñas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $reseñas = $this->reseñasRepository->find($id);

        if (empty($reseñas)) {
            Flash::error('Reseñas not found');

            return redirect(route('reseñas.index'));
        }

        return view('reseñas.edit')->with('reseñas', $reseñas);
    }

    /**
     * Update the specified reseñas in storage.
     *
     * @param int $id
     * @param UpdatereseñasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatereseñasRequest $request)
    {
        $reseñas = $this->reseñasRepository->find($id);

        if (empty($reseñas)) {
            Flash::error('Reseñas not found');

            return redirect(route('reseñas.index'));
        }

        $reseñas = $this->reseñasRepository->update($request->all(), $id);

        Flash::success('Reseñas updated successfully.');

        return redirect(route('reseñas.index'));
    }

    /**
     * Remove the specified reseñas from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $reseñas = $this->reseñasRepository->find($id);

        if (empty($reseñas)) {
            Flash::error('Reseñas not found');

            return redirect(route('reseñas.index'));
        }

        $this->reseñasRepository->delete($id);

        Flash::success('Reseñas deleted successfully.');

        return redirect(route('reseñas.index'));
    }
}
