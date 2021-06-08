<?php
class detailPageController extends Controller
{
    public function show($param)
    {
        require 'model/hotel.php';
        $hotel = new Hotel;
        $detailPage = $this->render("detailpage/detailpage");
        $id = substr($param,4);
        $detailPage->attribute = $hotel->getHotelInfoByHotelId($id);
        echo $detailPage;
    }
}
