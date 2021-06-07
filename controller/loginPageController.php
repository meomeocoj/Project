<?php
class loginPageController extends Controller
{
    public function show()
    {
        require 'model/user.php';
        $user = new User;

        $loginPage = $this->render("loginpage/loginPage");
        echo $loginPage;
    }

    public function verify()
    {
        require 'model/user.php';
        $user = new User;
        if (isset($_POST['btn-login']) == true) {

            $data = array();
            $data['email'] = $_POST['email'];
            $data['password'] = $_POST['pass1'];
            $result = $user->verify($data);
            if ($result) {
                $_SESSION['username'] = $result->fullname;
                $_SESSION['login'] = true;
                $_SESSION['role'] = $result->role;
                // echo $_SESSION['username'];
                // $_SESSION['role'];
                redirect('../home', 'Welcome ' . $_SESSION['username'], 'success');
            } else {
                echo "false";
                redirect('../login/show', 'Wrong username or password', 'error');
            }
        }
    }
}
