<?php
class signupPageController extends Controller
{
    public function show()
    {
        require 'model/user.php';
        $user = new User;
        $signupPage = $this->render("signuppage/signupPage");
        echo $signupPage;
    }
    public function signUp()
    {
        require 'model/user.php';
        $user = new User;
        if (isset($_POST['btn-login'])) {
            $data = array();
            $data['fullname'] = $_POST['fullname'];
            $data['email'] = $_POST['email'];
            $pwd = $_POST['pass1'];
            $data['password'] = password_hash($pwd, PASSWORD_BCRYPT);
            if ($user->insert($data)) {
                redirect('../login/show', 'Your account has been created, log in to continue', 'success');
            } else {
                redirect('../home', 'Something went wrong', 'error');
            }
        }
    }
}
