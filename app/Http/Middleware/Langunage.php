<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\App;

use Closure;
use Illuminate\Http\Request;

class Langunage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(session()->has('locale')){
            $locale = session('locale');
        }else{
            $locale = 'uz';
        }

        App::setLocale($locale);

        return $next($request);
    }
}
