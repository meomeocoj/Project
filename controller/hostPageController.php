<?php
class hostPageController extends Controller
{
    public function show()
    {
        require 'model/hotel.php';
        $hotel = new Hotel;
        $hostPage = $this->render("host/hostView");
        // $hostPage->hotels = $hotel->getAllHotels();
        // if (!isset($_SESSION['login'])) {
        //     $_SESSION['login'] = false;
        //     $_SESSION['username'] = NULL;
        //     $_SESSION['login'] = NUll;
        //     $_SESSION['role'] = NULL;
        // }
        echo $hostPage;
    }
    public function add()
    {
        require 'model/hotel.php';
        $hotel = new Hotel;
        $user = new User;
        if (isset($_POST['addButton'])) {
            $data = array();
            $data['hotelName'] = $_POST['hotelName'];
            $data['provinceName'] = $_POST['provinceName'];
            $data['districtName'] = $_POST['districtName'];
            $data['addressName'] = $_POST['addressName'];
            $data['numRoom'] = $_POST['numRoom'];
            $data['priceValue'] = $_POST['priceValue'];
            if ($hotel->add($data)) {
                redirect('../login/show', 'Your account has been created, log in to continue', 'success');
            } else {
                redirect('../home', 'Something went wrong', 'error');
            }
        }
    }
    public function edit()
    {
        require 'model/user.php';
        $user = new User;
        $hotel = new Hotel;
        if (isset($_POST['editButton'])) {
            $data = array();
            $data['hotelName'] = $_POST['hotelName'];
            $data['provinceName'] = $_POST['provinceName'];
            $data['districtName'] = $_POST['districtName'];
            $data['addressName'] = $_POST['addressName'];
            $data['numRoom'] = $_POST['numRoom'];
            $data['priceValue'] = $_POST['priceValue'];
            if ($hotel->update($data)) {
                redirect('../login/show', 'Your account has been created, log in to continue', 'success');
            } else {
                redirect('../home', 'Something went wrong', 'error');
            }
        }
    }
    public function delete($var)
    {
        require 'model/user.php';
        $user = new User;
        $hotel = new Hotel;
        if (isset($_POST['deleteButton'])) {
            if ($hotel->delete($var)) {
                redirect('../login/show', 'Your account has been created, log in to continue', 'success');
            } else {
                redirect('../home', 'Something went wrong', 'error');
            }
        }
    }
}
