<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLangMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //lang lo establezco con uno de estos valores:
        //si tengo en variable de sesion llamada lang
        //si no le dejo el valor que tenga en el fichero de conf
        $lang=session('lang')??config('app.locale');
        //modifico la variable de mi app global LOCALE

        app()->setLocale($lang);
        return $next($request);
    }
}
