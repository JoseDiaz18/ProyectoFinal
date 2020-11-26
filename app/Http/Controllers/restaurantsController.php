<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreaterestaurantsRequest;
use App\Http\Requests\UpdaterestaurantsRequest;
use App\Repositories\restaurantsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class restaurantsController extends AppBaseController
{
    /** @var  restaurantsRepository */
    private $restaurantsRepository;

    public function __construct(restaurantsRepository $restaurantsRepo)
    {
        $this->restaurantsRepository = $restaurantsRepo;
    }

    /**
     * Display a listing of the restaurants.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $restaurants = $this->restaurantsRepository->paginate(10);

        return view('restaurants.index')
            ->with('restaurants', $restaurants);
    }

    /**
     * Show the form for creating a new restaurants.
     *
     * @return Response
     */
    public function create()
    {
        return view('restaurants.create');
    }

    /**
     * Store a newly created restaurants in storage.
     *
     * @param CreaterestaurantsRequest $request
     *
     * @return Response
     */
    public function store(CreaterestaurantsRequest $request)
    {
        $input = $request->all();

        $restaurants = $this->restaurantsRepository->create($input);

        Flash::success('Restaurants saved successfully.');

        return redirect(route('restaurants.index'));
    }

    /**
     * Display the specified restaurants.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $restaurants = $this->restaurantsRepository->find($id);

        if (empty($restaurants)) {
            Flash::error('Restaurants not found');

            return redirect(route('restaurants.index'));
        }

        return view('restaurants.show')->with('restaurants', $restaurants);
    }

    /**
     * Show the form for editing the specified restaurants.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $restaurants = $this->restaurantsRepository->find($id);

        if (empty($restaurants)) {
            Flash::error('Restaurants not found');

            return redirect(route('restaurants.index'));
        }

        return view('restaurants.edit')->with('restaurants', $restaurants);
    }

    /**
     * Update the specified restaurants in storage.
     *
     * @param int $id
     * @param UpdaterestaurantsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdaterestaurantsRequest $request)
    {
        $restaurants = $this->restaurantsRepository->find($id);

        if (empty($restaurants)) {
            Flash::error('Restaurants not found');

            return redirect(route('restaurants.index'));
        }

        $restaurants = $this->restaurantsRepository->update($request->all(), $id);

        Flash::success('Restaurants updated successfully.');

        return redirect(route('restaurants.index'));
    }

    /**
     * Remove the specified restaurants from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $restaurants = $this->restaurantsRepository->find($id);

        if (empty($restaurants)) {
            Flash::error('Restaurants not found');

            return redirect(route('restaurants.index'));
        }

        $this->restaurantsRepository->delete($id);

        Flash::success('Restaurants deleted successfully.');

        return redirect(route('restaurants.index'));
    }
}
