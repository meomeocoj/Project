<?php

class Dispatcher
{

    private $request;

    public function dispatch()
    {
        //$this->request->url = /project/
        $this->request = new Request();
        Router::parse($this->request->url, $this->request);
        //$controller = new tasksController ------ (object)
        $controller = $this->loadController();
        //$this->request->action is the method to be called
        call_user_func_array([$controller, $this->request->action], $this->request->params);
    }

    public function loadController()
    {
        $name = $this->request->controller . "Controller";
        $file = 'controller/' . $name . '.php';
        require $file;
        $controller = new $name();
        return $controller;
    }

}
