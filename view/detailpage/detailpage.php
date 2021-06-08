<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost:88/Project/view/css/detailPage.css">
    <title>Detailpage</title>
</head>

<body>
<?php
require $_SERVER['DOCUMENT_ROOT'] . '/Project/view/common/header.php';
?>
<!--slide show-->
<!-- Container for the image gallery -->
<div class="container">

    <!-- Full-width images with number text -->
    <div class="mySlides">
        <div class="numbertext">1 / 6</div>
        <a href="localhost">
        <img src="../../view/image/img1.png" href="localhost" style="width:100%" height="400px">
        </a>
    </div>

    <div class="mySlides">
        <div class="numbertext">2 / 6</div>
        <img src="../../view/image/img2.png" style="width:100%" height="400px">
    </div>

    <div class="mySlides">
        <div class="numbertext">3 / 6</div>
        <img src="../../view/image/img3.png" style="width:100%" height="400px">
    </div>

    <div class="mySlides">
        <div class="numbertext">4 / 6</div>
        <img src="../../view/image/img4.png" style="width:100%" height="400px">
    </div>

    <div class="mySlides">
        <div class="numbertext">5 / 6</div>
        <img src="../../view/image/img5.png" style="width:100%" height="400px">
    </div>

    <div class="mySlides">
        <div class="numbertext">6 / 6</div>
        <img src="../../view/image/img6.png" style="width:100%" height="400px">
    </div>

    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <!-- Image text -->
    <div class="caption-container">
        <p id="caption"></p>
    </div>

    <!-- Thumbnail images -->
    <div class="row">
        <div class="column">
            <img class="demo cursor" src="../../view/image/img1.png" style="width:100%" height="100px" onclick="currentSlide(1)" alt="1 / 6">
        </div>
        <div class="column">
            <img class="demo cursor" src="../../view/image/img2.png" style="width:100%" height="100px" onclick="currentSlide(2)" alt="2 / 6">
        </div>
        <div class="column">
            <img class="demo cursor" src="../../view/image/img3.png" style="width:100%" height="100px" onclick="currentSlide(3)" alt="3 / 6">
        </div>
        <div class="column">
            <img class="demo cursor" src="../../view/image/img4.png" style="width:100%" height="100px" onclick="currentSlide(4)" alt="4 / 6">
        </div>
        <div class="column">
            <img class="demo cursor" src="../../view/image/img5.png" style="width:100%" height="100px" onclick="currentSlide(5)" alt="5 / 6">
        </div>
        <div class="column">
            <img class="demo cursor" src="../../view/image/img6.png" style="width:100%" height="100px" onclick="currentSlide(6)" alt="6 / 6">
        </div>
    </div>
</div>

<!--sidenav-->
<div class="sidenav">
    <p id="price"></p>
    <!-- Trigger/Open The Modal -->
    <button id="myBtn">Open Modal</button>
    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-body">
                <span class="close">&times;</span>
            </div>
        </div>

    </div>
</div>

<div class="overview">
    <h2>NAME OF HOTEL GOES HERE</h2>
    <p>Optional address</p>

    <button class="accordion">OVERVIEW</button>
    <div class="panel">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>

    <button class="accordion">AMENITIES (TIỆN NGHI)</button>
    <div class="panel">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>

    <button class="accordion">PRICE</button>
    <div class="panel">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>

    <button class="accordion">AVAILABILITY</button>
    <div class="panel">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>

    <button class="accordion">REGULATION AND POLICIES</button>
    <div class="panel">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
</div>


<!--footer-->
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/Project/view/common/footer.php';
?>
</body>

<script>
    window.onload = function(){
        price = "800000"
        url = window.location.href;
        hotel_id = url.match(/id=(.*)/)[1];
        console.log(hotel_id)
        /*document.getElementById('price').innerHTML = "Price: " + "<b>" + price + "</b>" + " vnd per night.";*/
        window.location.href = "localhost:88/Project/detail/queryPrice/?" + hotel_id
    };
</script>

<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }

    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
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
        captionText.innerHTML = dots[slideIndex-1].alt;
    }


</script>

</html>