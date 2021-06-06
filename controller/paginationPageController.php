<?php


class paginationPageController extends Controller
{
    public function show($data) {
        require 'model/hotel.php';
        $hotel = new Hotel;
        $pagination = $this->render("pagination");
        $param = explode('&', $data);
        $param = array_slice($param, 0);
        $id = substr($param[0],4);
        $page = substr($param[1], 5);
        $pagination->province_id = $id;
        $pagination->page = $page;
        $pagination->attribute = $hotel->getHotelById($id, $page);
//        foreach ($responses as $response) {
////            $pagination->name = $response->name;
////            echo $response->name;
//            array_push($pagination->name,$response->name);
//        }
        echo $pagination;
    }
}