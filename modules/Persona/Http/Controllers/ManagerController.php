<?php

namespace Modules\Persona\Http\Controllers;

use Exception;
use Illuminate\Http\JsonResponse;
use Modules\Base\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Modules\Persona\Http\Requests\ManagerRequest;
use Modules\Persona\Models\Manager;
use Modules\User\Models\User;

class ManagerController extends BaseController
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
        $manager = new Manager();

        if ($limit != -1)
            $managers = $manager->paginate($limit);
        else
            $managers = $manager->all();

        return $this->successResponse($managers, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param Manager $manager
     *
     * @return JsonResponse
     */
    public function show(Manager $manager)
    {
        return response()->json($manager, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ManagerRequest $request
     *
     * @return JsonResponse
     */
    public function store(ManagerRequest $request)
    {
        $data = $request->all();

        $newUser = $request->all(['name', 'login', 'email']);
        $newUser['password'] = bcrypt($request->get('password'));
        $newUser['permission_id'] = 2;
        $newUser['status'] = true;

        $user = User::create($newUser);

        $manager = Manager::create($data);
        return response()->json($manager, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ManagerRequest $request
     * @param Manager $manager
     *
     * @return JsonResponse
     */
    public function update(ManagerRequest $request, Manager $manager)
    {
        $manager = $manager->update($request->all());
        return response()->json($manager, 201);
    }

    /**
     *  Update multiple managers in the database
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function bulkUpdate(Request $request)
    {
        $data = $request->get('data');
        foreach ($data as $key => $item) {
            Manager::where('id', $key)->update($item);
        }
        return $this->index(request());
    }

    /**
     * Delete multiple managers in the database
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function bulkDelete(Request $request)
    {
        $ids = $request->get('ids');
        Manager::whereIn('id', $ids)->delete();
        return $this->index(request());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Manager $manager
     *
     * @return JsonResponse
     *
     * @throws Exception
     */
    public function destroy(Manager $manager)
    {
        $manager->delete();
        return response()->json('Deleted with success.', 202);
    }
}
