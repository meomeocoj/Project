<?php
class   detailPageController extends Controller
{
    public function show($param)
    {
        require 'model/hotel.php';
        $hotel = new Hotel;
        $detailPage = $this->render("detailpage/detailpage");
        $id = substr($param,4);
        $detailPage->attribute = $hotel->getHotelInfoById($id);
        echo $detailPage;
    }

    public function book()
    {
        require 'model/receipt.php';
        $receipt = new Receipt;

        echo $_POST['btn-book'];

        if (isset($_POST['btn-book'])) {
            $data = array();
            $data['email'] = $_POST['email'];
            $data['checkin_date'] = $_POST['checkin-date'];
            $data['checkout_date'] = $_POST['checkout-date'];
            $data['booking_date'] = (date("Y/m/d", $t));
            $data['payment'] = $_POST['tot-price'];
            $data['hotel_id'] = $_POST['hotel_id'];
            if ($receipt->insert($data)) {
                redirect('../', 'Booking success!', 'success');
            } else {
                redirect('../', 'Something went wrong', 'error');
            }
        }
    }
}
