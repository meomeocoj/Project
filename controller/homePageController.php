<?php
class homePageController extends Controller {
    public function show()
    {
        require 'model/hotel.php';
        $hotel = new Hotel;
        $homePage = $this->render("homePage");
        $homePage->hotels = $hotel->getAllHotels();
        echo $homePage;
    }
}
?>