<?php
class crudController extends Controller
{
    public function edit()
    {
        require 'model/user.php';
        $user = new User;
        $editPage = $this->render("signuppage/signupPage");
        echo $editPage;
    }
    public function showHostCrud()
    {
        require 'model/user.php';
        $user = new User;
        $signupPage = $this->render("signuppage/signupPage");
        echo $signupPage;
    }
    public function updateUser(){
        require 'model/user.php';
        require 'model/user.php';
        $user = new User;
    }
}
