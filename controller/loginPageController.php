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

    public function verify()
    {
        require 'model/user.php';
        $user = new User;
        if (isset($_POST['btn-login']) == true) {

            $data = array();
            $data['email'] = $_POST['email'];
            $data['password'] = $_POST['pass1'];

            if ($user->verify($data)) {
                redirect('../home', 'Your account has been created', 'success');
            } else {
                echo "false";
                // redirect('../home', 'Something went wrong', 'error');
            }
        }
    }
}
