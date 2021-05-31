<?php
class signupController extends Controller
{
    public function show()
    {
        require 'model/user.php';
        $user = new User;
        $signupPage = $this->render("signupPage");
        echo $signupPage;

        if (isset($_POST['signup']) == true) {
            $data = array();
            $data['fullname'] = $_POST['fullname'];
            $data['email'] = $_POST['email'];
            $data['username'] = $_POST['username'];
            $data['password'] = $_POST['password'];

            if ($user->insert($data)) {
                redirect('index.php', 'Your account has been created', 'success');
            } else {
                redirect('index.php', 'Something went wrong', 'error');
            }
        }
        
    }
}
