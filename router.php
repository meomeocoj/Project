<?php

class Router
{

    public static function parse($url, $request)
    {
        $url = trim($url);

        if (substr($url, 1) == 'Project/') {
            $request->controller = "homePage";
            $request->action = "show";
            $request->params = [];
        } else if (substr($url, 1) == 'Project/login') {
            $request->controller = "loginPage";
            $request->action = "show";
            $request->params = [];
        } else if (substr($url, 1) == 'Project/signup') {
            $request->controller = "signupPage";
            $request->action = "show";
            $request->params = [];
        } else
        //-------------/Project/signup/show
        {
            // $explode_url = explode('/', $url);
            // $explode_url = array_slice($explode_url, 2);
            // $request->controller = $explode_url[0];
            // $request->action = $explode_url[1];
            // $request->params = array_slice($explode_url, 2);
            echo 'error 404';
        }
    }
}
