<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/detailPage.css">
    <title>Detailpage</title>
</head>

<body>
<header>
    <div class="header">
        <nav class="nav-bar">
            <div class="nav-left">
                <a href="#" id="logo"><svg version="1.1" viewBox="0 0 50 50" class="svg-icon svg-fill" style="width: 50px; height: 50px;"><path pid="0" d="M25.093 0c13.781.06 24.94 11.317 24.882 25.106C49.917 38.894 38.663 50.058 24.88 50 11.1 49.942-.059 38.683.001 24.894.057 11.106 11.31-.058 25.092 0zm11.801 31.9L14.398 16.053c.241-.26.48-.518.74-.777 2.7-2.687 5.971-4.031 9.775-4.015 3.804.015 7.064 1.388 9.741 4.098.238.241.476.482.694.743l-5.951 4.133 2.381 1.688 5.153-3.576v.02L39.33 16.7c-.692-1.203-1.584-2.325-2.616-3.39-3.231-3.292-7.167-4.947-11.788-4.967-4.6-.019-8.53 1.603-11.809 4.867a17.806 17.806 0 00-2.682 3.408l1.429 1.004 23.429 16.51c-.24.26-.48.518-.74.777-2.7 2.687-5.971 4.011-9.775 3.996-3.803-.016-7.063-1.37-9.74-4.08-.258-.26-.496-.521-.734-.782l6.111-4.251-.139-.181-2.183-1.528-5.373 3.735v-.021l-2.377 1.65a17.824 17.824 0 002.654 3.43c3.253 3.291 7.169 4.946 11.769 4.965 4.62.021 8.549-1.602 11.83-4.866 1.06-1.075 1.96-2.21 2.682-3.406l-2.383-1.67z"></path></svg></a>
            </div>
            <div class="nav-right">
                <div id="register">
                    <a href="#">Đăng kí</a>
                </div>
                <div id="login">
                    <a href="#">Đăng nhập</a>
                </div>
            </div>
        </nav>
    </div>
</header>

<!--slide show-->
<!-- Container for the image gallery -->
<div class="container">

    <!-- Full-width images with number text -->
    <div class="mySlides">
        <div class="numbertext">1 / 6</div>
        <img src="../view/image/img1.png" style="width:100%" height="500px">
    </div>

    <div class="mySlides">
        <div class="numbertext">2 / 6</div>
        <img src="../view/image/img2.png" style="width:100%" height="500px">
    </div>

    <div class="mySlides">
        <div class="numbertext">3 / 6</div>
        <img src="../view/image/img3.png" style="width:100%" height="500px">
    </div>

    <div class="mySlides">
        <div class="numbertext">4 / 6</div>
        <img src="../view/image/img4.png" style="width:100%" height="500px">
    </div>

    <div class="mySlides">
        <div class="numbertext">5 / 6</div>
        <img src="../view/image/img5.png" style="width:100%" height="500px">
    </div>

    <div class="mySlides">
        <div class="numbertext">6 / 6</div>
        <img src="../view/image/img6.png" style="width:100%" height="500px">
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
            <img class="demo cursor" src="../view/image/img1.png" style="width:100%" height="128px" onclick="currentSlide(1)" alt="1 / 6">
        </div>
        <div class="column">
            <img class="demo cursor" src="../view/image/img2.png" style="width:100%" height="128px" onclick="currentSlide(2)" alt="2 / 6">
        </div>
        <div class="column">
            <img class="demo cursor" src="../view/image/img3.png" style="width:100%" height="128px" onclick="currentSlide(3)" alt="3 / 6">
        </div>
        <div class="column">
            <img class="demo cursor" src="../view/image/img4.png" style="width:100%" height="128px" onclick="currentSlide(4)" alt="4 / 6">
        </div>
        <div class="column">
            <img class="demo cursor" src="../view/image/img5.png" style="width:100%" height="128px" onclick="currentSlide(5)" alt="5 / 6">
        </div>
        <div class="column">
            <img class="demo cursor" src="../view/image/img6.png" style="width:100%" height="128px" onclick="currentSlide(6)" alt="6 / 6">
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
<footer class="footer-distributed">
    <div class="footer-left">

        <h3>Lux<span>Stay</span></h3>

        <p class="footer-links">
            <a href="#">Home</a> ·
            <a href="#">Blog</a> ·
            <a href="#">Pricing</a> ·
            <a href="#">About</a> ·
            <a href="#">Faq</a> ·
            <a href="#">Contact</a>
        </p>

        <p class="footer-company-name">luxstay &copy; 2021 </p>
    </div>

    <div class="footer-center">

        <div>
            <i class="map-marker"></i>
            <p><span style="color:#5383d3">Tầng 21 tòa nhà Capital Tower số 109 phố Trần Hưng Đạo, phường Cửa Nam, quận Hoàn Kiếm</span>Hà Nội, Việt Nam</p>
        </div>

        <div>
            <i class="phone"></i>
            <p>+84 889 866 666</p>
        </div>

        <div>
            <i class="envelope"></i>
            <p><a href="mailto:support@company.com">info@luxstay.com</a></p>
        </div>

    </div>

    <div class="footer-right">

        <p class="footer-company-about">
            <span>About the company</span> Luxstay là công ty hàng đầu về booking tại Việt Nam
        </p>

        <div class="footer-icons">

            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 408.788 408.788" style="enable-background:new 0 0 408.788 408.788;" xml:space="preserve">
                    <path style="fill:#475993;" d="M353.701,0H55.087C24.665,0,0.002,24.662,0.002,55.085v298.616c0,30.423,24.662,55.085,55.085,55.085  h147.275l0.251-146.078h-37.951c-4.932,0-8.935-3.988-8.954-8.92l-0.182-47.087c-0.019-4.959,3.996-8.989,8.955-8.989h37.882  v-45.498c0-52.8,32.247-81.55,79.348-81.55h38.65c4.945,0,8.955,4.009,8.955,8.955v39.704c0,4.944-4.007,8.952-8.95,8.955  l-23.719,0.011c-25.615,0-30.575,12.172-30.575,30.035v39.389h56.285c5.363,0,9.524,4.683,8.892,10.009l-5.581,47.087  c-0.534,4.506-4.355,7.901-8.892,7.901h-50.453l-0.251,146.078h87.631c30.422,0,55.084-24.662,55.084-55.084V55.085  C408.786,24.662,384.124,0,353.701,0z"/>
                    </svg></a>
            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 112.197 112.197" style="enable-background:new 0 0 112.197 112.197;" xml:space="preserve">
                    <g>
                        <circle style="fill:#55ACEE;" cx="56.099" cy="56.098" r="56.098"/>
                        <g>
                            <path style="fill:#F1F2F2;" d="M90.461,40.316c-2.404,1.066-4.99,1.787-7.702,2.109c2.769-1.659,4.894-4.284,5.897-7.417    c-2.591,1.537-5.462,2.652-8.515,3.253c-2.446-2.605-5.931-4.233-9.79-4.233c-7.404,0-13.409,6.005-13.409,13.409    c0,1.051,0.119,2.074,0.349,3.056c-11.144-0.559-21.025-5.897-27.639-14.012c-1.154,1.98-1.816,4.285-1.816,6.742    c0,4.651,2.369,8.757,5.965,11.161c-2.197-0.069-4.266-0.672-6.073-1.679c-0.001,0.057-0.001,0.114-0.001,0.17    c0,6.497,4.624,11.916,10.757,13.147c-1.124,0.308-2.311,0.471-3.532,0.471c-0.866,0-1.705-0.083-2.523-0.239    c1.706,5.326,6.657,9.203,12.526,9.312c-4.59,3.597-10.371,5.74-16.655,5.74c-1.08,0-2.15-0.063-3.197-0.188    c5.931,3.806,12.981,6.025,20.553,6.025c24.664,0,38.152-20.432,38.152-38.153c0-0.581-0.013-1.16-0.039-1.734    C86.391,45.366,88.664,43.005,90.461,40.316L90.461,40.316z"/>
                        </g>
                    </svg></a>
            <a href="#" id="likedin"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 112.196 112.196" style="enable-background:new 0 0 112.196 112.196;" xml:space="preserve">
                    <g>
                        <circle style="fill:#007AB9;" cx="56.098" cy="56.097" r="56.098"/>
                        <g>
                            <path style="fill:#F1F2F2;" d="M89.616,60.611v23.128H76.207V62.161c0-5.418-1.936-9.118-6.791-9.118    c-3.705,0-5.906,2.491-6.878,4.903c-0.353,0.862-0.444,2.059-0.444,3.268v22.524H48.684c0,0,0.18-36.546,0-40.329h13.411v5.715    c-0.027,0.045-0.065,0.089-0.089,0.132h0.089v-0.132c1.782-2.742,4.96-6.662,12.085-6.662    C83.002,42.462,89.616,48.226,89.616,60.611L89.616,60.611z M34.656,23.969c-4.587,0-7.588,3.011-7.588,6.967    c0,3.872,2.914,6.97,7.412,6.97h0.087c4.677,0,7.585-3.098,7.585-6.97C42.063,26.98,39.244,23.969,34.656,23.969L34.656,23.969z     M27.865,83.739H41.27V43.409H27.865V83.739z"/>
                        </g>
                    </svg></a>
            <a href="#" id="github"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 496 496" style="enable-background:new 0 0 496 496;" xml:space="preserve">
                    <path id="SVGCleanerId_0" style="fill:#3E77BF;" d="M247.992,5.163C111.048,5.163,0,116.627,0,254.163  c0,109.992,71.048,203.32,169.632,236.24c12.392,2.296,16.912-5.392,16.912-12c0-5.904-0.216-21.56-0.336-42.344  c-69,15.064-83.552-33.376-83.552-33.376c-11.264-28.768-27.52-36.408-27.52-36.408c-22.528-15.456,1.696-15.16,1.696-15.16  c24.88,1.752,37.976,25.672,37.976,25.672c22.144,38.048,58.064,27.048,72.192,20.672c2.232-16.08,8.656-27.064,15.736-33.28  c-55.056-6.296-112.944-27.64-112.944-123.04c0-27.176,9.656-49.408,25.52-66.832c-2.568-6.296-11.072-31.6,2.416-65.872  c0,0,20.832-6.688,68.2,25.52c19.784-5.52,41-8.28,62.096-8.392c21.048,0.112,42.28,2.864,62.096,8.392  c47.328-32.208,68.128-25.52,68.128-25.52c13.52,34.272,5.016,59.576,2.456,65.872c15.904,17.424,25.504,39.648,25.504,66.832  c0,95.64-57.984,116.68-113.232,122.856c8.904,7.688,16.832,22.872,16.832,46.112c0,33.296-0.296,60.128-0.296,68.296  c0,6.672,4.472,14.424,17.048,11.968C425.016,457.387,496,364.123,496,254.163C496,116.627,384.952,5.163,247.992,5.163z"/>
                    <g>
                        <path id="SVGCleanerId_0_1_" style="fill:#3E77BF;" d="M247.992,5.163C111.048,5.163,0,116.627,0,254.163   c0,109.992,71.048,203.32,169.632,236.24c12.392,2.296,16.912-5.392,16.912-12c0-5.904-0.216-21.56-0.336-42.344   c-69,15.064-83.552-33.376-83.552-33.376c-11.264-28.768-27.52-36.408-27.52-36.408c-22.528-15.456,1.696-15.16,1.696-15.16   c24.88,1.752,37.976,25.672,37.976,25.672c22.144,38.048,58.064,27.048,72.192,20.672c2.232-16.08,8.656-27.064,15.736-33.28   c-55.056-6.296-112.944-27.64-112.944-123.04c0-27.176,9.656-49.408,25.52-66.832c-2.568-6.296-11.072-31.6,2.416-65.872   c0,0,20.832-6.688,68.2,25.52c19.784-5.52,41-8.28,62.096-8.392c21.048,0.112,42.28,2.864,62.096,8.392   c47.328-32.208,68.128-25.52,68.128-25.52c13.52,34.272,5.016,59.576,2.456,65.872c15.904,17.424,25.504,39.648,25.504,66.832   c0,95.64-57.984,116.68-113.232,122.856c8.904,7.688,16.832,22.872,16.832,46.112c0,33.296-0.296,60.128-0.296,68.296   c0,6.672,4.472,14.424,17.048,11.968C425.016,457.387,496,364.123,496,254.163C496,116.627,384.952,5.163,247.992,5.163z"/>
                    </g>
                    <g>
                        <path style="fill:#114C82;" d="M378.496,109.131c13.128,33.904,4.752,58.928,2.2,65.176c15.904,17.424,25.504,39.648,25.504,66.832   c0,95.64-57.984,116.68-113.232,122.856c8.904,7.688,16.832,22.872,16.832,46.112c0,33.296-0.296,60.128-0.296,68.296   c0,6.672,4.472,14.424,17.048,11.968C425.016,457.387,496,364.123,496,254.163c0-29.56-5.152-57.896-14.568-84.2   C447.24,133.963,409.184,109.987,378.496,109.131z"/>
                        <path style="fill:#114C82;" d="M192.976,377.323c2.784-5.616,6.184-9.984,9.76-13.144c-30.176-3.456-61.168-11.512-83.048-33.744   C136.52,358.451,163.928,371.195,192.976,377.323z"/>
                    </g>
                    <path style="fill:#6CA9EA;" d="M12.912,270.947c0-137.536,111.048-249,247.992-249c76.04,0,144.056,34.392,189.536,88.488  C405.52,46.755,331.616,5.163,247.992,5.163C111.048,5.163,0,116.627,0,254.163c0,61.32,22.12,117.424,58.752,160.792  C29.944,374.291,12.912,324.643,12.912,270.947z"/>
                    <path style="fill:#083E66;" d="M322.712,426.899c0-23.232-7.928-38.44-16.832-46.128c55.248-6.16,113.24-27.216,113.24-122.848  c0-27.184-9.6-49.4-25.52-66.824c2.576-6.296,11.096-31.608-2.456-65.872c0,0-2.576-0.792-7.896-0.488  c5.808,25.84-0.416,44.32-2.552,49.568c15.904,17.424,25.504,39.648,25.504,66.832c0,95.64-57.984,116.68-113.232,122.856  c8.904,7.688,16.832,22.872,16.832,46.112c0,33.296-0.296,60.128-0.296,68.296c0,5.872,3.496,12.568,12.92,12.408  C322.488,479.555,322.712,455.659,322.712,426.899z"/>
                    <path style="fill:#114C82;" d="M117.464,423.995c5.208,10.72,22.712,36.4,68.888,30.992c-0.064-5.648-0.112-11.976-0.144-18.928  C150.584,443.835,129.552,434.667,117.464,423.995z"/>
                    <path style="fill:#6CA9EA;" d="M126.368,391.387c-1.592-2.4-4.576-6.472-8.904-10.544  C120.272,385.011,123.256,388.507,126.368,391.387z"/>
                    <g>
                    </svg></a>

        </div>

    </div>
</footer>
</body>

</html>