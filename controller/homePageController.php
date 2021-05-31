<?php
class homePageController extends Controller
{
    public function show()
    {
        require 'model/hotel.php';
        $hotel = new Hotel;
        $homePage = $this->render("homePage");
        $homePage->hotels = $hotel->getAllHotels();
        echo $homePage;
    }
    public function search($data)
    {
        require_once 'model/Hotel.php';
        $hotel = new Hotel;
        echo $data. '<br>';
        echo $data[0]. '<br>';
        $responses = $hotel->getSearchResult($data);
        
        foreach ($responses as $response) {
            echo $response->name;
        }
    }
}
