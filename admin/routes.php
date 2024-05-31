<?php
class routes
{
    private $controllers = [
        'product' => ['index', 'error', 'create'],
        'users' => ['index', 'update', 'create'],
        'cart' => ['index']
    ];
    public function checkRoute($controller, $action)
    {
        if (
            !array_key_exists($controller, $this->controllers) ||
            !in_array($action, $this->controllers[$controller])
        ) {
            $this->processRoute('product', 'error');
        } else {
            $this->processRoute($controller, $action);
        }
    }
    public function processRoute($controller, $action)
    {
        include_once('Controllers/' . $controller . 'Controller.php');
        $class = $controller . 'Controller';
        $controller = new $class;
        $controller->$action();
    }
}
