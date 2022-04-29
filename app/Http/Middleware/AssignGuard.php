<?php

namespace App\Http\Middleware;

use App\Http\Traits\GeneratTrait;
use Closure;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;
use JWTAuth;

class AssignGuard extends BaseMiddleware
{
    use GeneratTrait;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if($guard != null){
            auth()->shouldUse($guard); //shoud you user guard / table
            $token = $request->header('auth-token');
            $request->headers->set('auth-token', (string) $token, true);
            $request->headers->set('Authorization', 'Bearer '.$token, true);
            try {
                $user = auth()->authenticate();  //check authenticted user
            } catch (\Exception $e){
                return $this->returnError('3001',$e->getMessage());
            }

        }
        return $next($request);
    }
}
