<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductsPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        echo 'XEM DUOC PRODUCT';
        // if(!$this->isLogin()){
        //     return redirect(route('login'));
        // }
        return $next($request);
    }

    public function isLogin() {
        return true;
    }
}
