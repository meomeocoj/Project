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
        if (isset($_POST['btn-login'])) {
            $data = array();
            $data['email'] = $_POST['email'];
            $data['checkin_date'] = $_POST['checkinDate'];
            $data['checkout_date'] = $_POST['checkoutDate'];
            $data['booking_date'] = $_POST['bookingDate'];
            $data['payment'] = $_POST['totalPrice'];
            $data['hotel_id'] = $_POST['hotel_id'];
            if ($receipt->insert($data)) {
                redirect('../detail/show', 'Booking success!', 'success');
            } else {
                redirect('../detail/home', 'Something went wrong', 'error');
            }
        }
    }
}
