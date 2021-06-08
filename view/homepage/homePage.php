<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/css/main.css">
    <script type="text/javascript" src="http://localhost/Project/view/js/script.js"></script>
    <script type="text/javascript" src="view/js/search.js"></script>
    <title>Homepage</title>
</head>
<?php
require $_SERVER['DOCUMENT_ROOT'] . '/Project/view/common/header.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Project/view/common/message.php';
?>
<body>
    <div class="hot-location">
        <h2>Địa điểm nổi bật</h2>
        <p>Cùng luxstay bắt đầu cuộc hành trình chinh phục thế giới</p>
    </div>
    <!--slide show-->
    <div class="slideshow-container">
        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade"> 
            <a href="pagination/show/?id=11&page=1">
                <div class="numbertext">1 / 3</div>
                <img src="http://localhost/Project/view/image/HaNoi2.jpg" style="width:100%; height:400px">
                <div class="text">Hà Nội</div>
            </a>
        </div>

        <div class="mySlides fade">
            <a href="pagination/show/?id=33&page=1">
                <div class="numbertext">2 / 3</div>
                <img src="view/image/HCMjpg.jpg" style="width:100%; height:400px;">
                <div class="text">Thành phố Hồ Chí Minh</div>
            </a>
        </div>

        <div class="mySlides fade">
            <a href="pagination/show/?id=15&page=1">
                <div class="numbertext">3 / 3</div>
                <img src="view/image/location_10_1559303118.png" style="width:100%; height:400px">
                <div class="text">Vũng Tàu</div>
            </a>
        </div>
        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>
    <!-- The dots/circles -->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>
    <script>
        //slide
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}

    </script>
</body>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/Project/view/common/footer.php';
?>

</html>