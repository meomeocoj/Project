<?php
class homePageController extends Controller
{
    public function show()
    {
        require 'model/hotel.php';
        $hotel = new Hotel;
        $homePage = $this->render("homepage/homePage");
        $homePage->hotels = $hotel->getAllHotels();
        if (!isset($_SESSION['login'])) {
            $_SESSION['login'] = false;
            $_SESSION['username'] = NULL;
            $_SESSION['login'] = NUll;
            $_SESSION['role'] = NULL;
        }
        echo $homePage;   
    }
    public function search($data)
    {
        require_once 'model/Hotel.php';
        $hotel = new Hotel;
        // echo $data. '<br>';
        $responses = $hotel->getSearchResult($data);

        foreach ($responses as $response) {
            echo var_dump($response);
        }
    }
    public function logout(){
        $_SESSION['login'] = false;
        $_SESSION['username'] = NULL;
        $_SESSION['login'] = NUll;
        $_SESSION['role'] = NULL;
        redirect('../home', '', '');
    }
}
