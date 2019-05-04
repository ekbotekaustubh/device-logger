<?php

/**
 * Class Bootstrap
 */
class Bootstrap
{
    /**
     * MVC setup
     * @throws Exception
     */
    public function __construct()
    {
        $url = $_GET['url'] ?? '';

        $session = new Session();
        $session->auth($url);

        $urlParams = explode('/', rtrim($url, '/'));
        $controller = empty($urlParams[0]) ? 'index' : $urlParams[0];
        $action = empty($urlParams[1]) ? 'index' : $urlParams[1];

        $params = [
            'controller' => $controller,
            'controllerClass' => $controller . 'Controller',
            'controllerFilePath' => sprintf('controllers/%sController.php', ucfirst($controller)),
            'action' => $action,
            'actionName' => sprintf('%sAction', $action)
        ];


        if (!file_exists($params['controllerFilePath'])) {
            require 'controllers/ErrorController.php';
            $errorController = new ErrorController();
            $errorController->errorAction();
            return false;
        }

        require $params['controllerFilePath'];

        /** @var Controller $controllerObject */
        $controllerObject = new $params['controllerClass']();
        $controllerObject->preDispatch();
        $controllerObject->{$params['actionName']}();
        $controllerObject->postDispatch($params);
    }
}
