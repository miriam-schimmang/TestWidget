<?php

namespace TestWidget\Providers;


use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

class TestWidgetRouteServiceProvider extends RouteServiceProvider
{
    public function map(Router $router)
    {
       $router->get('hello','TestWidget\Controllers\ContentController@sayHello');
    }
}
