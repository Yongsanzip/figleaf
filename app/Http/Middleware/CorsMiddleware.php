<?php
/**
 * Created by PhpStorm.
 * User: Dongeon
 * Date: 3/15/19
 * Time: 1:08 AM
 */
namespace App\Http\Middleware;

use Closure;

class CorsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {


        $headers = [
            'Access-Control-Allow-Origin' => $request->header('origin'),
            'Access-Control-Allow-Methods'=> 'POST, GET, OPTIONS, PUT, DELETE',
            'Access-Control-Allow-Headers'=> $request->header('Access-Control-Request-Headers'),
            'Access-Control-Allow-Credentials'=> 'true',
            'Access-Control-Max-Age'=> '86400'
        ];

        if ($request->isMethod('OPTIONS'))
        {
            return response('', 200);
        }

        $response = $next($request);
        foreach($headers as $key => $value)
        {
            $response->header($key, $value);
        }

//        $response->header('Access-Control-Allow-Methods', 'GET, POST, PUT, PATCH, DELETE');
//        $response->header('Access-Control-Allow-Headers', $request->header('Access-Control-Request-Headers'));
//        $response->header('Access-Control-Allow-Origin', '*');
//        $response->header('Access-Control-Expose-Headers', 'Location');

        return $response;

//        return $next($request)
//            ->header('Access-Control-Allow-Origin', '*')
//            ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, PATCH, DELETE, OPTIONS')
//            ->header('Access-Control-Allow-Headers', 'Content-Type, User-Agent, Origin');
    }
}
