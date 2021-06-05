<?php

class Router
{

    public static function parse($url, $request)
    {
        $url = trim($url);
        if (substr($url, 1) == 'Project/') {
            $request->controller = "homepage";
            $request->action = "show";
            $request->params = [];

        } else if (substr($url, 1) == 'Project/home') {

            $request->controller = "homepage";
            $request->action = "show";
            $request->params = [];

        }
        //  else if (substr($url, 1) == 'Project/login') {
        //     $request->controller = "loginPage";
        //     $request->action = "show";
        //     $request->params = [];
        // } else if (substr($url, 1) == 'Project/signup') {
        //     $request->controller = "signupPage";
        //     $request->action = "show";
        //     $request->params = [];
        // } else if (substr($url, 1, 14) == 'Project/search') {
        //     $request->controller = "homePage";
        //     $request->action = "search";
        //     $explode_url = explode('/', $url);
        //     $request->params = array_slice($explode_url, 3);
        // }
        //-------------/Project/signup/show
        //-------------/Project/detailpage/view/image/img1.png
        // else if($explode_url[1] = '/'){
        //     $request->controller = $explode_url[0].'page';
        //     $request->action = 'show';
        //     $request->params = array_slice($explode_url, 2);
        // }
        else {
            $explode_url = explode('/', $url);
            $explode_url = array_slice($explode_url, 2);
            $request->controller = $explode_url[0] . 'page';
            $request->action = $explode_url[1];
            $request->params = array_slice($explode_url, 2);
        }
    }
}
