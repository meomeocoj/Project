<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/login.css">
    <link rel="stylesheet" href="../view/css/main.css">
    <script type="text/javascript" src="../view/js/script.js"></script>
    <title>Login</title>
</head>

<body> 
    <!--Content-->

    <div class="form-group-container">
        <form action="http://localhost/Project/signup/signup" method="POST" class="register-form">
            <div class="avatar">
                <a href="view/homepage/homePage.php">
                    <svg version="1.1" viewBox="0 0 50 50" class="svg-icon svg-fill" style="width: 50px; height: 50px;">
                        <path pid="0" d="M25.093 0c13.781.06 24.94 11.317 24.882 25.106C49.917 38.894 38.663 50.058 24.88 50 11.1 49.942-.059 38.683.001 24.894.057 11.106 11.31-.058 25.092 0zm11.801 31.9L14.398 16.053c.241-.26.48-.518.74-.777 2.7-2.687 5.971-4.031 9.775-4.015 3.804.015 7.064 1.388 9.741 4.098.238.241.476.482.694.743l-5.951 4.133 2.381 1.688 5.153-3.576v.02L39.33 16.7c-.692-1.203-1.584-2.325-2.616-3.39-3.231-3.292-7.167-4.947-11.788-4.967-4.6-.019-8.53 1.603-11.809 4.867a17.806 17.806 0 00-2.682 3.408l1.429 1.004 23.429 16.51c-.24.26-.48.518-.74.777-2.7 2.687-5.971 4.011-9.775 3.996-3.803-.016-7.063-1.37-9.74-4.08-.258-.26-.496-.521-.734-.782l6.111-4.251-.139-.181-2.183-1.528-5.373 3.735v-.021l-2.377 1.65a17.824 17.824 0 002.654 3.43c3.253 3.291 7.169 4.946 11.769 4.965 4.62.021 8.549-1.602 11.83-4.866 1.06-1.075 1.96-2.21 2.682-3.406l-2.383-1.67z"></path>
                    </svg>
                </a>
            </div>
            <h2 style="text-align: center;">Login LuxStay</h2>
            <label class ="label-block" for="username">Full name</label>
            <input class ="input-block" type="text" name="fullname" required>
            <label class ="label-block" for="email">Email address</label>
            <input class ="input-block" type="email" name="email" required>
            <label class ="label-block" for="password">Password</label>
            <input class ="input-block" type="password" name="pass1" required>
            <label class ="label-block" for="password">Verified password</label>
            <input class ="input-block" type="password" name="pass2" required>
            <div class="host">
            <label class ="label-block">Type of customer</label>
            <input type="radio" id="guest" name="type" value="guest" checked="checked">
            <label for="guest">Guest</label>
            <input type="radio" id="host" name="type" value="host">
            <label for="host" >host</label>
            </div>
            <button type="submit" id="btn-login" name="btn-login" onClick="signUp()"> Sign Up </button>

            <div id="forgot">
                <a href="view/homepage/homePage.php" style="text-align: center; margin-top:5px;">Home</a>
            </div>
        </form>
    </div>

    <?php include '../common/footer.php' ?>
</body>

</html>