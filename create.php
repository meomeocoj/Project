<?php

$user = new User;
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
 
$template = new template('view/signuppage/account_create.php');

echo $template;
?>

