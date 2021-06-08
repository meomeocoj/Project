<?php
class   detailPageController extends Controller

{
    public function show($param)
    {
        require 'model/hotel.php';
        $hotel = new Hotel;
        $detailPage = $this->render("detailpage/detailpage");

        $detailPage->hotels = $hotel->getDetailHotel($param);
        //$results = $detailPage->hotels
//foreach ($hotels as hotel) echo $hotel-name;
        echo $detailPage;
    }

    public function queryPrice($param)
    {
        require 'model/hotel.php';
        $hotel = new Hotel;
        $detailPage = $this->render("detailpage/detailpage");
        echo $detailPage;
    }
}
