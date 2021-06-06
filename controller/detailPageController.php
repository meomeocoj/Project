<?php
class detailPageController extends Controller
{
    public function show()
    {
        require 'model/hotel.php';
        $hotel = new Hotel;
        $detailPage = $this->render("detailpage/detailpage");

        $detailPage->hotels = $hotel->getDetailHotel();
        //$results = $detailPage->hotels
//foreach ($hotels as hotel) echo $hotel-name;
        echo $detailPage;
    }
}
