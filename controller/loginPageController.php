<?php
class loginPageController extends Controller
{
    public function show()
    {
        require 'model/user.php';
        $user = new User;
        $loginPage = $this->render("loginPage");
        echo $loginPage;
        
    }
}