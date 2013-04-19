<?php
class Sequoia
{

    private $controller;

    public function __constructor()
    {

    }

    public function init($config = null)
    {
        $application = $_GET['app'];
        $controller = isset($_GET['controller']) ? $_GET['controller'] : 'def';
        $this->controller = $this->getController($application, $controller);
    }

    private function getController($app, $controllerName)
    {
        $path =  BASE . DS . 'app' . DS . $app . DS . 'controllers' . DS . $controllerName . '.php';
        echo $path;
        require $path;
        $controllerClass = ucfirst($controllerName);
        return new $controllerClass();
    }
}