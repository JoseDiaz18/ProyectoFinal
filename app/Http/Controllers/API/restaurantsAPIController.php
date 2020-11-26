<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreaterestaurantsAPIRequest;
use App\Http\Requests\API\UpdaterestaurantsAPIRequest;
use App\Models\restaurants;
use App\Repositories\restaurantsRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class restaurantsController
 * @package App\Http\Controllers\API
 */

class restaurantsAPIController extends AppBaseController
{
    /** @var  restaurantsRepository */
    private $restaurantsRepository;

    public function __construct(restaurantsRepository $restaurantsRepo)
    {
        $this->restaurantsRepository = $restaurantsRepo;
    }

    /**
     * Display a listing of the restaurants.
     * GET|HEAD /restaurants
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $restaurants = $this->restaurantsRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($restaurants->toArray(), 'Restaurants retrieved successfully');
    }

    /**
     * Store a newly created restaurants in storage.
     * POST /restaurants
     *
     * @param CreaterestaurantsAPIRequest $request
     *
     * @return Response
     */
    public function store(CreaterestaurantsAPIRequest $request)
    {
        $input = $request->all();

        $restaurants = $this->restaurantsRepository->create($input);

        return $this->sendResponse($restaurants->toArray(), 'Restaurants saved successfully');
    }

    /**
     * Display the specified restaurants.
     * GET|HEAD /restaurants/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var restaurants $restaurants */
        $restaurants = $this->restaurantsRepository->find($id);

        if (empty($restaurants)) {
            return $this->sendError('Restaurants not found');
        }

        return $this->sendResponse($restaurants->toArray(), 'Restaurants retrieved successfully');
    }

    /**
     * Update the specified restaurants in storage.
     * PUT/PATCH /restaurants/{id}
     *
     * @param int $id
     * @param UpdaterestaurantsAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdaterestaurantsAPIRequest $request)
    {
        $input = $request->all();

        /** @var restaurants $restaurants */
        $restaurants = $this->restaurantsRepository->find($id);

        if (empty($restaurants)) {
            return $this->sendError('Restaurants not found');
        }

        $restaurants = $this->restaurantsRepository->update($input, $id);

        return $this->sendResponse($restaurants->toArray(), 'restaurants updated successfully');
    }

    /**
     * Remove the specified restaurants from storage.
     * DELETE /restaurants/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var restaurants $restaurants */
        $restaurants = $this->restaurantsRepository->find($id);

        if (empty($restaurants)) {
            return $this->sendError('Restaurants not found');
        }

        $restaurants->delete();

        return $this->sendSuccess('Restaurants deleted successfully');
    }
}
