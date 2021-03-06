<?php
class hostPageController extends Controller
{
    public function show()
    {
        require 'model/hotel.php';
        require 'model/receipt.php';
        $hotel = new Hotel;
        $receipt = new Receipt;
        $data = $_SESSION['email'];
        $hostPage = $this->render("host/hostView");


        $hostPage->provinces = $hotel->getAllProvince();
        $hostPage->hotels = $hotel->getHotelInfoByManagerId();
        $hostPage->districts = $hotel->getAllDistrict();
        // $hostPage->hotels = $hotel->getAllHotels();
        // if (!isset($_SESSION['login'])) {
        //     $_SESSION['login'] = false;
        //     $_SESSION['username'] = NULL;
        //     $_SESSION['login'] = NUll;
        //     $_SESSION['role'] = NULL;
        // }
        $hostPage->receipts = $receipt->getReceiptHotelId($data);

        echo $hostPage;
        //        foreach ($hostPage->provinces as $province){
        //            echo $province->name;
        //        }
        //        foreach ($hostPage->districts as $district){
        //            echo $district->name;
        //        }
    }
    public function add()
    {
        require 'model/hotel.php';
        $hotel = new Hotel;
        //        $user = new User;
        if (isset($_POST['addButton'])) {
            $data = array();
            $data['hotelName'] = $_POST['hotelName'];
            $data['provinceName'] = $_POST['provinceName'];
            $data['districtName'] = $_POST['districtName'];
            $data['provinceId'] = $hotel->getProvinceByName($_POST['provinceName'])->id;
            $data['addressName'] = $_POST['addressName'];
            $data['numRoom'] = $_POST['numRoom'];
            $data['priceValue'] = $_POST['priceValue'];
            if ($hotel->addHotel($data)) {
                redirect('../host/show', 'Your account has been created, log in to continue', 'success');
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
    public function delete($param)
    {
        require 'model/user.php';
        require 'model/hotel.php';
        $user = new User;
        $hotel = new Hotel;
        $id = $id = substr($param,4);
            if ($hotel->deleteHotel($id)) {
                redirect('http://localhost/Project/host/show', 'Your account has been created, log in to continue', 'success');
            } else {
                redirect('../home', 'Something went wrong', 'error');
            }
    }
}
