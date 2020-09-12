<?php

namespace App\Http\Middleware;

use Closure;

class Permission
{
    /**
     * Handle an incoming request and check if the user has permission.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $fieldPermissionBd = 'write';

        switch ($request->method()) {
            case 'GET' :
                $fieldPermissionBd = 'read';
                break;
            case 'DELETE' :
                $fieldPermissionBd = 'delete';
        }

        $arrayRequestUri = explode('/', $request->getRequestUri());
        @$route = explode('?', $arrayRequestUri[3]);

        @$moduleSlug = count($arrayRequestUri) > 3 ? $arrayRequestUri[2] . '/' . $route[0] : $arrayRequestUri[2];


        $user = $request->user()->modules()
            ->where('slug', $moduleSlug)
            ->where($fieldPermissionBd, 1)
            ->first();

//        if (!$user) {
////            return response()->json(['error' => 'You don\'t have permission.'], 401);
////        }

        return $next($request);
    }
}
