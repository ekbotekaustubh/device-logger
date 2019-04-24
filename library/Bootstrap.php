<?php

/**
 * Class Bootstrap
 */
class Bootstrap
{
    public function __construct()
    {
        $url = explode('/', rtrim($_GET['url'], '/'));
        $controller = ucfirst($url[0] ?? 'index') . 'Controller';
        $action = ($url[1] ?? 'index') . 'Action';

        if (!file_exists('controllers/' . $controller .'.php')) {
            require 'controllers/ErrorController.php';
            $errorController = new ErrorController();
            return false;
        }

        require 'controllers/'.$controller.'.php';

        $controllerObject = new $controller();
        $controllerObject->{$action}();
    }
}