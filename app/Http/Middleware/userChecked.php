<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use Auth;

class UserChecked
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ( Auth::check() ) {
            
            if ( Auth::user() -> verified_at == NULL ) {
                Auth::logout();
                return redirect( "/home" )->with( 'error', 'Sorry, You are not allowed yet, Please wait.' );
            }
        }
    
        return $next( $request );
    }
}
