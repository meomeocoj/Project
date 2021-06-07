<?php


class paginationPageController extends Controller
{
    public function show($data) {
        require 'model/hotel.php';
        $hotel = new Hotel;
        $pagination = $this->render("pagination/pagination");
        $param = explode('&', $data);
        $param = array_slice($param, 0);
        $id = substr($param[0],4);
        $page = substr($param[1], 5);
        $pagination->page = $page;
        $pagination->location = $hotel->getProvinceById($id);
        $active = array("", "", "", "", "", "", "", "");
        $active[$page-1] = "class=\"active\"";
        $pagination->contentPage = '<a href="#">&laquo;</a><a '.$active[0].' href="?id='.$id.'&page=1">1</a><a '.$active[1].' href="?id='.$id.'&page=2">2</a><a '.$active[2].' href="?id='.$id.'&page=3">3</a><a '.$active[3].' href="?id='.$id.'&page=4">4</a><a '.$active[4].' href="?id='.$id.'&page=5">5</a><a '.$active[5].' href="?id='.$id.'&page=6">6</a><a '.$active[6].' href="?id='.$id.'&page=7">7</a><a '.$active[7].' href="?id='.$id.'&page=8">8</a><a href="#">&raquo;</a>';
        $pagination->attribute = $hotel->getHotelById($id, $page);

        echo $pagination;
    }
}