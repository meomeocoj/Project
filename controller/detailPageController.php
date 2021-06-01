<?php
class detailPageController extends Controller
{
    public function show()
    {
        require 'model/hotel.php';
        $hotel = new Hotel;
        $detailPage = $this->render("detailPage");

        $detailPage->hotels = $hotel->getDetailHotel();
        echo getcwd();
        echo $detailPage;
    }
}
