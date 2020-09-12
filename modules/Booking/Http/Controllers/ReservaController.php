<?php

namespace Modules\Booking\Http\Controllers;

use Exception;
use Illuminate\Http\JsonResponse;
use Modules\Base\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Modules\Booking\Http\Requests\ReservaRequest;
use Modules\Booking\Models\Reserva;

class ReservaController extends BaseController
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
        $reserva = new Reserva();

        if ($limit != -1)
            $reservas = Reserva::with('hotel','guest','bedroom')->paginate($limit);
        else
            $reservas = $reserva->all();

        return $this->successResponse($reservas, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param Reserva $reserva
     *
     * @return JsonResponse
     */
    public function show(Reserva $reserva)
    {
        return response()->json($reserva, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ReservaRequest $request
     *
     * @return JsonResponse
     */
    public function store(ReservaRequest $request)
    {
        $data = $request->all();
        $reserva = Reserva::create($data);
        return response()->json($reserva, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ReservaRequest $request
     * @param Reserva $reserva
     *
     * @return JsonResponse
     */
    public function update(ReservaRequest $request, Reserva $reserva)
    {
        $reserva = $reserva->update($request->all());
        return response()->json($reserva, 201);
    }

    /**
     *  Update multiple reserva in the database
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function bulkUpdate(Request $request)
    {
        $data = $request->get('data');
        foreach ($data as $key => $item) {
            Reserva::where('id', $key)->update($item);
        }
        return $this->index(request());
    }

    /**
     * Delete multiple reservas in the database
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function bulkDelete(Request $request)
    {
        $ids = $request->get('ids');
        Reserva::whereIn('id', $ids)->delete();
        return $this->index(request());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Reserva $reserva
     *
     * @return JsonResponse
     *
     * @throws Exception
     */
    public function destroy(Reserva $reserva)
    {
        $reserva->delete();
        return response()->json('Deleted with success.', 202);
    }
}
