<?php

namespace Modules\Base\Http\Controllers;

 use Illuminate\Foundation\Bus\DispatchesJobs;
 use Illuminate\Http\JsonResponse;
 use Illuminate\Routing\Controller;
 use Illuminate\Foundation\Validation\ValidatesRequests;
 use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

 class BaseController extends Controller
 {
     use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    /**
     * Retorna uma resposta de sucesso.
     *
     * @param $data, $code
     * @return JsonResponse
     */
    protected function successResponse($data, $code = 200)
	{
		return response()->json($data, $code);
	}

    /**
     * Retorna uma resposta de erro.
     *
     * @param $message, $code
     * @return JsonResponse
     */
    protected function errorResponse($message, $code = 500){
        return response()->json(['errors'=>$message, 'code'=>$code], $code);
    }

 }
