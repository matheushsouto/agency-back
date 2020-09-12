<?php

namespace Modules\User\Http\Controllers;

use Exception;
use Illuminate\Http\JsonResponse;
use Modules\Base\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Modules\User\Http\Requests\ModuleRequest;
use Modules\User\Models\Module;

class ModuleController extends BaseController
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

        $modules = Module::all();
        return $this->successResponse($modules, 200);
    }
}
