<?php

namespace Modules\User\Http\Controllers;

use Exception;
use Illuminate\Http\JsonResponse;
use Modules\Base\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Modules\User\Http\Requests\UserRequest;
use Modules\User\Models\User;

class UserController extends BaseController
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

        $users = User::with('permission')->paginate($limit);
        return $this->successResponse($users, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param User $user
     *
     * @return JsonResponse
     */
    public function show(User $user)
    {
        return response()->json($user, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param UserRequest
     *
     * @return JsonResponse
     */
    public function store(UserRequest $request)
    {
        $user = User::create($request->all());
        return response()->json($user, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UserRequest $request
     * @param User $user
     *
     * @return JsonResponse
     */
    public function update(UserRequest $request, User $user)
    {
        $user = $user->update($request->all());
        return response()->json($user, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     *
     * @return JsonResponse
     *
     * @throws Exception
     */
    public function destroy(User $user)
    {
        $user->delete();
        return response()->json('Deleted with success.', 202);
    }
}
