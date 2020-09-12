<?php

namespace Modules\Booking\Http\Controllers;

use Exception;
use Illuminate\Http\JsonResponse;
use Modules\Base\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Modules\Booking\Http\Requests\HotelRequest;
use Modules\Booking\Models\Hotel;

class HotelController extends BaseController
{

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function index(Request $request)
    {
        $limit = $request->get('limit', 5);
        $hotel = new Hotel();

        if ($limit != -1)
            $hotels = $hotel->paginate($limit);
        else
            $hotels = $hotel->all();

        return $this->successResponse($hotels, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param Hotel $hotel
     *
     * @return JsonResponse
     */
    public function show(Hotel $hotel)
    {
        return response()->json($hotel, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param HotelRequest $request
     *
     * @return JsonResponse
     */
    public function store(HotelRequest $request)
    {
        $data = $request->all();
        $hotel = Hotel::create($data);
        return response()->json($hotel, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param HotelRequest $request
     * @param Hotel $hotel
     *
     * @return JsonResponse
     */
    public function update(HotelRequest $request, Hotel $hotel)
    {
        $hotel = $hotel->update($request->all());
        return response()->json($hotel, 201);
    }

    /**
     *  Update multiple hotels in the database
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function bulkUpdate(Request $request)
    {
        $data = $request->get('data');
        foreach ($data as $key => $item) {
            Hotel::where('id', $key)->update($item);
        }
        return $this->index(request());
    }

    /**
     * Delete multiple hotels in the database
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function bulkDelete(Request $request)
    {
        $ids = $request->get('ids');
        Hotel::whereIn('id', $ids)->delete();
        return $this->index(request());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Hotel $hotel
     *
     * @return JsonResponse
     *
     * @throws Exception
     */
    public function destroy(Hotel $hotel)
    {
        $hotel->delete();
        return response()->json('Deleted with success.', 202);
    }
}
