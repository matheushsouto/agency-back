<?php

namespace Modules\Booking\Http\Controllers;

use Exception;
use Illuminate\Http\JsonResponse;
use Modules\Base\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Modules\Booking\Http\Requests\BedroomRequest;
use Modules\Booking\Models\Bedroom;

class BedroomController extends BaseController
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
        $bedroom = new Bedroom();

        if ($limit != -1)
            $bedrooms = Bedroom::with('hotel')->paginate($limit);
        else
            $bedrooms = $bedroom->all();

        return $this->successResponse($bedrooms, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param Bedroom $bedroom
     *
     * @return JsonResponse
     */
    public function show(Bedroom $bedroom)
    {
        return response()->json($bedroom, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param BedroomRequest $request
     *
     * @return JsonResponse
     */
    public function store(BedroomRequest $request)
    {
        $data = $request->all();
        $bedroom = Bedroom::create($data);
        return response()->json($bedroom, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param BedroomRequest $request
     * @param Bedroom $bedroom
     *
     * @return JsonResponse
     */
    public function update(BedroomRequest $request, Bedroom $bedroom)
    {
        $bedroom = $bedroom->update($request->all());
        return response()->json($bedroom, 201);
    }

    /**
     *  Update multiple bedroom in the database
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function bulkUpdate(Request $request)
    {
        $data = $request->get('data');
        foreach ($data as $key => $item) {
            Bedroom::where('id', $key)->update($item);
        }
        return $this->index(request());
    }

    /**
     * Delete multiple bedrooms in the database
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function bulkDelete(Request $request)
    {
        $ids = $request->get('ids');
        Bedroom::whereIn('id', $ids)->delete();
        return $this->index(request());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Bedroom $bedroom
     *
     * @return JsonResponse
     *
     * @throws Exception
     */
    public function destroy(Bedroom $bedroom)
    {
        $bedroom->delete();
        return response()->json('Deleted with success.', 202);
    }
}
