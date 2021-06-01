<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <script type="text/javascript" src="../js/script.js"></script>
    <title>Homepage</title>
</head>
<body>
    <?php include('../common/header.php'); ?>
    <div class="hot-location">
        <h2>Địa điểm nổi bật</h2>
        <p>Cùng luxstay bắt đầu cuộc hành trình chinh phục thế giới</p>
    </div>
    <!--slide show-->
    <div class="slideshow-container">
        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
            <a href="#">
                <div class="numbertext">1 / 3</div>
                <img src="../img/HaNoi2.jpg" style="width:100%; height:400px">
                <div class="text">Hà Nội</div>
            </a> 
        </div>
      
        <div class="mySlides fade">
            <a href="#">
                <div class="numbertext">2 / 3</div>
                <img src="../img/HCMjpg.jpg" style="width:100%; height:400px;">
                <div class="text">Thành phố Hồ Chí Minh</div>
            </a> 
        </div>
      
        <div class="mySlides fade">
            <a href="#">
                <div class="numbertext">3 / 3</div>
                <img src="../img/location_10_1559303118.png" style="width:100%; height:400px">
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
      <!--footer-->
      <?php include '../common/footer.php' ?>
</body>
</html>