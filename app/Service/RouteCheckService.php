<?php

namespace App\Service;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class RouteCheckService
{
    public static function checkRoute(string $route, int $route_type) : bool
    {
        /**
         * $route_type
         * 1 => Dinamic Route
         * 2 => Static URL
         */

        if($route_type == 2){

            $routes = Route::getRoutes();
            $myRequest = Request::create($route);

            try {
                $routes->match($myRequest);
                $status = true;
            }
            catch (\Exception $exception){
                $status = false;
            }

        }
        elseif ($route_type == 1){
            if(Route::has($route)){
                $status = true;
            }
            else{
                $status = false;
            }
        }

        return $status;
    }
}
