<?php

namespace Modules\Persona\Http\Controllers;

use Exception;
use Illuminate\Http\JsonResponse;
use Modules\Base\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Modules\Persona\Http\Requests\GuestRequest;
use Modules\Persona\Models\Guest;
use Modules\User\Models\User;

class GuestController extends BaseController
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

        $guest = new Guest();

        if ($limit != -1)
            $guests = $guest->paginate($limit);
        else
            $guests = $guest->all();

        return $this->successResponse($guests, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param Guest $guest
     *
     * @return JsonResponse
     */
    public function show(Guest $guest)
    {
        return response()->json($guest, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param GuestRequest $request
     *
     * @return JsonResponse
     */
    public function store(GuestRequest $request)
    {
        $data = $request->all();

        $newUser = $request->all(['name', 'login', 'email']);
        $newUser['password'] = bcrypt($request->get('password'));
        $newUser['permission_id'] = 4;
        $newUser['status'] = true;

        $user = User::create($newUser);
        $guest = Guest::create($data);

        return response()->json($guest, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param GuestRequest $request
     * @param Guest $guest
     *
     * @return JsonResponse
     */
    public function update(GuestRequest $request, Guest $guest)
    {
        $guest = $guest->update($request->all());
        return response()->json($guest, 201);
    }

    /**
     *  Update multiple guests in the database
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function bulkUpdate(Request $request)
    {
        $data = $request->get('data');
        foreach ($data as $key => $item) {
            Guest::where('id', $key)->update($item);
        }
        return $this->index(request());
    }

    /**
     * Delete multiple guests in the database
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function bulkDelete(Request $request)
    {
        $ids = $request->get('ids');
        Guest::whereIn('id', $ids)->delete();
        return $this->index(request());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Guest $guest
     *
     * @return JsonResponse
     *
     * @throws Exception
     */
    public function destroy(Guest $guest)
    {
        $guest->delete();
        return response()->json('Deleted with success.', 202);
    }
}
