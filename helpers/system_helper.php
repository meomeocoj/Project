<?php
function redirect($page = null, $message = null, $message_type = null)
{
    if (is_string($page)) {
        $location = $page;
    } else {
        $location = $_SERVER['SCRIPT_NAME'];
    }

    //check for message
    if ($message != null) {
        //set message
        $_SESSION['message'] = $message;
    }
    if ($message_type != null) {
        //set message type
        $_SESSION['message_type'] = $message_type;
    }

    header('Location: ' . $location);
    exit;
}

function displayMessage()
{
    if (!empty([$_SESSION['message']])) {

        $message = $_SESSION['message'];

        if (!empty($_SESSION['message_type'])) {

            $message_type = $_SESSION['message_type'];

            if ($message_type == 'error') {
                echo $message;
            } else {
                echo  $message;
            }
        }
        $_SESSION['message'] = '';
        $_SESSION['message_type'] = '';
    } else {
        echo '';
    }
}
