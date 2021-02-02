<?php

namespace App\Http\Middleware;

use Closure;
//use Illuminate\Http\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Response;
//use \JWTAuth;
use \Exception;
//use \Response;
use InfyOm\Generator\Utils\ResponseUtil;
use Tymon\JWTAuth\Facades\JWTAuth;

class CheckAPIToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return $next($request);
        /*$routeName = str_replace($request->route()->action['prefix'] . '.', '', $request->route()->action['as']);
        if (in_array($routeName, ['login', 'register', 'socialLogin', 'resize', 'forget-password', 'verify-code', 'reset-password'])) {
            return $next($request);
        }

        try {
            if (!$user = auth()->guard('api')->setToken($request->bearerToken())->user()) {
                return Response::json(ResponseUtil::makeError("Unauthorized access"), 403);
            } else {
                return $next($request);
            }
        } catch (Exception $e) {
            return Response::json(ResponseUtil::makeError("Unauthorized access"), 403);
        }*/
    }
}