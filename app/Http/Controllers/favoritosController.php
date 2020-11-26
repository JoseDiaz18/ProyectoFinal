<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatefavoritosRequest;
use App\Http\Requests\UpdatefavoritosRequest;
use App\Repositories\favoritosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class favoritosController extends AppBaseController
{
    /** @var  favoritosRepository */
    private $favoritosRepository;

    public function __construct(favoritosRepository $favoritosRepo)
    {
        $this->favoritosRepository = $favoritosRepo;
    }

    /**
     * Display a listing of the favoritos.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $favoritos = $this->favoritosRepository->paginate(10);

        return view('favoritos.index')
            ->with('favoritos', $favoritos);
    }

    /**
     * Show the form for creating a new favoritos.
     *
     * @return Response
     */
    public function create()
    {
        return view('favoritos.create');
    }

    /**
     * Store a newly created favoritos in storage.
     *
     * @param CreatefavoritosRequest $request
     *
     * @return Response
     */
    public function store(CreatefavoritosRequest $request)
    {
        $input = $request->all();

        $favoritos = $this->favoritosRepository->create($input);

        Flash::success('Favoritos saved successfully.');

        return redirect(route('favoritos.index'));
    }

    /**
     * Display the specified favoritos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $favoritos = $this->favoritosRepository->find($id);

        if (empty($favoritos)) {
            Flash::error('Favoritos not found');

            return redirect(route('favoritos.index'));
        }

        return view('favoritos.show')->with('favoritos', $favoritos);
    }

    /**
     * Show the form for editing the specified favoritos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $favoritos = $this->favoritosRepository->find($id);

        if (empty($favoritos)) {
            Flash::error('Favoritos not found');

            return redirect(route('favoritos.index'));
        }

        return view('favoritos.edit')->with('favoritos', $favoritos);
    }

    /**
     * Update the specified favoritos in storage.
     *
     * @param int $id
     * @param UpdatefavoritosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatefavoritosRequest $request)
    {
        $favoritos = $this->favoritosRepository->find($id);

        if (empty($favoritos)) {
            Flash::error('Favoritos not found');

            return redirect(route('favoritos.index'));
        }

        $favoritos = $this->favoritosRepository->update($request->all(), $id);

        Flash::success('Favoritos updated successfully.');

        return redirect(route('favoritos.index'));
    }

    /**
     * Remove the specified favoritos from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $favoritos = $this->favoritosRepository->find($id);

        if (empty($favoritos)) {
            Flash::error('Favoritos not found');

            return redirect(route('favoritos.index'));
        }

        $this->favoritosRepository->delete($id);

        Flash::success('Favoritos deleted successfully.');

        return redirect(route('favoritos.index'));
    }
}
