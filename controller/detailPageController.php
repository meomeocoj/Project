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

    public function book($param)
    {
        require 'model/receipt.php';
        require 'model/hotel.php';
        $receipt = new Receipt;
        $hotel = new Hotel;
        $id = substr($param,4);
        $response = $hotel->getHotelInfoById($id);
        $t=time();
        if (isset($_POST['btn-book']) == true) {
            $data = array();
            $data['email'] = $_POST['email'];
            $data['checkin_date'] = strval($_POST['checkin-date']);
            $data['checkout_date'] = $_POST['checkout-date'];
            $data['booking_date'] = (date("Y/m/d", $t));
            $data['payment'] = $_POST['tot-price'];
            $data['hotel_id'] = $response->id;
            if ($receipt->insert($data)) {
                redirect('http://localhost/Project/detail/show/?id='.$response->id, 'Booking success!', 'success');
            } else {
                redirect('../detail/home', 'Something went wrong', 'error');
            }
        }
    }
}
