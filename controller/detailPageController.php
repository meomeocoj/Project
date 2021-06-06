<?php
class detailPageController extends Controller
{
    public function show($id)
    {
        require 'model/hotel.php';
        $hotel = new Hotel;
        $detailPage = $this->render("detailPage");

        $detailPage->hotels = $hotel->getDetailHotel();
        
        echo $detailPage;
    }
}
