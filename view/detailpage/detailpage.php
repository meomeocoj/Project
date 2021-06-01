<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <title>Detailpage</title>
</head>

<body>
<?php include'../common/header.php' ?>

<!--slide show-->
<!-- Container for the image gallery -->
<div class="container">

    <!-- Full-width images with number text -->
    <div class="mySlides">
        <div class="numbertext">1 / 6</div>
        <img src="img1.png" style="width:100%" height="500px">
    </div>

    <div class="mySlides">
        <div class="numbertext">2 / 6</div>
        <img src="img2.png" style="width:100%" height="500px">
    </div>

    <div class="mySlides">
        <div class="numbertext">3 / 6</div>
        <img src="img3.png" style="width:100%" height="500px">
    </div>

    <div class="mySlides">
        <div class="numbertext">4 / 6</div>
        <img src="img4.png" style="width:100%" height="500px">
    </div>

    <div class="mySlides">
        <div class="numbertext">5 / 6</div>
        <img src="img5.png" style="width:100%" height="500px">
    </div>

    <div class="mySlides">
        <div class="numbertext">6 / 6</div>
        <img src="img6.png" style="width:100%" height="500px">
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
            <img class="demo cursor" src="img1.png" style="width:100%" height="128px" onclick="currentSlide(1)" alt="1 / 6">
        </div>
        <div class="column">
            <img class="demo cursor" src="img2.png" style="width:100%" height="128px" onclick="currentSlide(2)" alt="2 / 6">
        </div>
        <div class="column">
            <img class="demo cursor" src="img3.png" style="width:100%" height="128px" onclick="currentSlide(3)" alt="3 / 6">
        </div>
        <div class="column">
            <img class="demo cursor" src="img4.png" style="width:100%" height="128px" onclick="currentSlide(4)" alt="4 / 6">
        </div>
        <div class="column">
            <img class="demo cursor" src="img5.png" style="width:100%" height="128px" onclick="currentSlide(5)" alt="5 / 6">
        </div>
        <div class="column">
            <img class="demo cursor" src="img6.png" style="width:100%" height="128px" onclick="currentSlide(6)" alt="6 / 6">
        </div>
    </div>
</div>

<!--sidenav-->
<div class="sidenav">
    <p>Price: <b>$PRICE</b> per night.</p>
        <button type="button">BOOK NOW</button>
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

<script>
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
</script>

<script>
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

<!--footer-->
<?php include '../common/footer.php'?>
</body>

</html>