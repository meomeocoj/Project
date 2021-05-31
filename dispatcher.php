<?php

class Dispatcher
{

    private $request;

    public function dispatch()
    {
        //$this->request->url = /project/
        $this->request = new Request();
        Router::parse($this->request->url, $this->request);

        $controller = $this->loadController();

        call_user_func_array([$controller, $this->request->action], $this->request->params);
    }

    public function loadController()
    {
        $name = $this->request->controller . "Controller";
        $file = 'controller/' . $name . '.php';
        require($file);
        $controller = new $name();
        return $controller;
    }

}
?>