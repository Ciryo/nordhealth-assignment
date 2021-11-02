<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Auth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $token = $request->bearerToken();
        !$token && $request->hasHeader("Authorization-assignment") && $token = substr($request->header("Authorization-assignment"), 7);

        //---siin on token vale
        if(!$token) {
            return response()->json([
                'error' => 'Token not provided.' . $token
            ], 400);
        }
        try {
            $credentials = JWT::decode($token, env('JWT_SECRET'), ['HS256']);

        } catch(ExpiredException $e) {

            return response()->json([
                'error' => 'Provided token is expired.'
            ], 400);

        } catch(Exception $e) {
            return response()->json([
                'error' => 'An error while decoding token.'
            ], 400);
        }

        return $next($request);
    }
}
