<?php

class Router
{
    public static function route($url)
    {
        $url = explode('/', $url);
        $controllerName = empty($url[0]) ? 'Home' : $url[0] ?? 'Home';
        $methodName = $url[1] ?? 'index';

        $controllerFile = __DIR__ . "/../controllers/$controllerName.php";
        if (file_exists($controllerFile)) {
            require_once $controllerFile;
            $controller = new $controllerName();

            if (method_exists($controller, $methodName)) {
                call_user_func_array([$controller, $methodName], array_slice($url, 2));
            } else {
               require __DIR__ . "/../views/errors/404.php";
            }
        } else {
            require __DIR__ . "/../views/errors/404.php";
        }
    }
}
