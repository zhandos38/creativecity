<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 20.01.2020
 * Time: 15:11
 */

namespace App\Http\Middleware;

use Closure;
use Jenssegers\Date\Date;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class Localization
{
    public function handle($request, Closure $next, $guard = null)
    {
        // DATE CONFIG
        if(LaravelLocalization::getCurrentLocale() == 'kz'){
            Date::setlocale('kk');
        }else{
            Date::setlocale(app()->getLocale());
        }

        return $next($request);
    }
}
