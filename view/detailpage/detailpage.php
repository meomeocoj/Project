<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../view/css/detailPage.css">
    <title><?php echo $attribute->name; ?></title>
</head>

<body>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/Project/view/common/header.php';?>

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
    <p id="price">Price: <b><?php
            if($attribute->price == -1) {
                $attribute->price = rand(500000,1500000);
            }
            echo ceil($attribute->price/1000)*1000; ?></b> per night.</p>
    <!-- Trigger/Open The Modal -->
    <button id="myBtn">BOOK NOW</button>
    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-body">
                <span class="close"></span>
                <label class="label-block" for="">Your check-in date: </label>
                <input class="input-block" type="date" id="checkinDate" name="checkin-date" max="2025-12-31" onchange="updateTotalPrice()"> </br>
                <label class="label-block" for="">Your check-out date: </label>
                <input class="input-block" type="date" id="checkoutDate" name="checkout-date" max="2025-12-31" onchange="updateTotalPrice()"> </br>
                <label class="label-block" for="">Number of room to book: </label>
                <input class="input-block" type="number" id="numberOfRoom" name="num-room" value="1" onchange="updateTotalPrice()"> </br>
                <label class="label-block" for="">Total price: </label>
                <input class="input-block" type="text" id="totalPrice" name="tot-price"> </br>
                <button id="myBtn2">CONFIRM</button>
            </div>
        </div>

    </div>
</div>

<div class="overview">
    <h2><?php echo $attribute->name; ?></h2>
    <p><?php echo $attribute->address; ?></p>

    <button class="accordion">OVERVIEW</button>
    <div class="panel">
        <p><?php echo '<b>'.$attribute->name.'</b> is perfectly located for both business and leisure guests in '.$attribute->province.'. The property features a wide range of facilities to make your stay a pleasant experience. Service-minded staff will welcome and guide you at '.$attribute->name.'. Each guestroom is elegantly furnished and equipped with handy amenities. The property offers various recreational opportunities. '.$attribute->name.' is an excellent choice from which to explore '.$attribute->province.' or to simply relax and rejuvenate.'; ?></p>
    </div>

    <button class="accordion">AMENITIES (TIỆN NGHI)</button>
    <div class="panel">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>

    <button class="accordion">PRICE</button>
    <div class="panel">
        <p>Price: <b><?php echo ceil($attribute->price/1000)*1000; ?></b> per night.</p>    </div>
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
    document.getElementById('checkinDate').valueAsDate = new Date();
    document.getElementById('checkoutDate').valueAsDate = new Date();

    function updateTotalPrice() {
        priceLine = document.getElementById('price').innerHTML;
        priceStr = priceLine.replace("Price: <b>", "")
        priceStr = priceStr.replace("</b> per night.", "")
        priceInt = parseInt(priceStr);

        date1 = document.getElementById('checkinDate').valueAsDate;
        date2 = document.getElementById('checkoutDate').valueAsDate;
        numRoom = document.getElementById('numberOfRoom').value;
        Difference_In_Time = date2 - date1;
        Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24);

        if (Difference_In_Days >=0 && numRoom >=1) {
            totalPrice = Difference_In_Days * numRoom * priceInt;
            document.getElementById('totalPrice').value = totalPrice.toString();
        }
    }

    /*date1 = document.getElementById('checkinDate').value
    date2 = document.getElementById('checkoutDate').value
    console.log(date1);
    console.log(date2);
    // To calculate the time difference of two dates
    var Difference_In_Time = date2.getTime() - date1.getTime();

    // To calculate the no. of days between two dates
    var Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24);

    console.log(Difference_In_Days);*/

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

<!--footer-->
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/Project/view/common/footer.php';
?>
</body>
</html>