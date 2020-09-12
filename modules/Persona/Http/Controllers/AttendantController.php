<?php

namespace Modules\Persona\Http\Controllers;

use Exception;
use Illuminate\Http\JsonResponse;
use Modules\Base\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Modules\Persona\Http\Requests\AttendantRequest;
use Modules\Persona\Models\Attendant;
use Modules\User\Models\User;

class AttendantController extends BaseController
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
        $attendant = new Attendant();

        if ($limit != -1)
            $attendants = $attendant->paginate($limit);
        else
            $attendants = $attendant->all();

        return $this->successResponse($attendants, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param Attendant $attendant
     *
     * @return JsonResponse
     */
    public function show(Attendant $attendant)
    {
        return response()->json($attendant, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param AttendantRequest $request
     *
     * @return JsonResponse
     */
    public function store(AttendantRequest $request)
    {
        $data = $request->all();

        $newUser = $request->all(['name', 'login', 'email']);
        $newUser['password'] = bcrypt($request->get('password'));
        $newUser['permission_id'] = 3;
        $newUser['status'] = true;

        $user = User::create($newUser);

        $attendant = Attendant::create($data);
        return response()->json($attendant, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param AttendantRequest $request
     * @param Attendant $attendant
     *
     * @return JsonResponse
     */
    public function update(AttendantRequest $request, Attendant $attendant)
    {
        $attendant = $attendant->update($request->all());
        return response()->json($attendant, 201);
    }

    /**
     *  Update multiple attendants in the database
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function bulkUpdate(Request $request)
    {
        $data = $request->get('data');
        foreach ($data as $key => $item) {
            Attendant::where('id', $key)->update($item);
        }
        return $this->index(request());
    }

    /**
     * Delete multiple attendants in the database
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function bulkDelete(Request $request)
    {
        $ids = $request->get('ids');
        Attendant::whereIn('id', $ids)->delete();
        return $this->index(request());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Attendant $attendant
     *
     * @return JsonResponse
     *
     * @throws Exception
     */
    public function destroy(Attendant $attendant)
    {
        $attendant->delete();
        return response()->json('Deleted with success.', 202);
    }
}
