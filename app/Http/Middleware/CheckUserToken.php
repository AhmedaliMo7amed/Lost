<?php

namespace App\Http\Middleware;

use App\Models\User;
use App\Traits\GeneralTrait;
use Closure;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use JWTAuth;

class CheckUserToken
{
    use GeneralTrait;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        try {
            JWTAuth::parseToken()->authenticate();
            if (auth()->guard('user-api')->user() instanceof User){
                return $next($request);
            }
        }
        catch (Exception $e) {
            if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException){
                return $this -> returnError('E50001','INVALID _TOKEN');
            }else if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException){
                return $this -> returnError('E50002','EXPIRED_TOKEN');
            } else{
                return $this -> returnError('E50003','TOKEN_NOTFOUND');
            }
        }catch (\Throwable $e) {
            if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException){
                return $this -> returnError('E50001','INVALID _TOKEN');
            }else if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException){
                return $this -> returnError('E50002','EXPIRED_TOKEN');
            } else{
                return $this -> returnError('E50003','TOKEN_NOTFOUND');
            }
        }
        return $this -> returnError('E5000','Unauthnticated');

    }
}
