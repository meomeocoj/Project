<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/paging.css">
    <title><?php echo'$location' ?></title>
</head>
<body>
<?php include '../common/header.php';?>
<div class="container">
    <div class="filter">
        <div id="total">
            $total hotel vaialble in $location 
        </div>
        <div id="filter">
            <span>Price </span>
            <select name="price-filter" onchange="filter(this.value)">
                <option value="desc-price">DESC</option>
                <option value="asc-price">ASC</option>
            </select>
        </div>
    </div>
    <div class="boxes">
    <div id="box">
        <a href="#">
        <img class ="image" src="../img/hotel.jpg" alt="house" style="width:300px; height:200px">
        </a>
        <a href="">$name</a>
        <p>$price/day</p>
    </div>
    <div id="box">
        <a href="#">
        <img class ="image" src="../img/hotel.jpg" alt="house" style="width:300px; height:200px">
        </a>
        <a href="">$name</a>
        <p>$price/day</p>
    </div>
    <div id="box">
        <a href="#">
        <img class ="image" src="../img/hotel.jpg" alt="house" style="width:300px; height:200px">
        </a>
        <a href="">$name</a>
        <p>$price/day</p>
    </div>
    <div id="box">
        <a href="#">
        <img class ="image" src="../img/hotel.jpg" alt="house" style="width:300px; height:200px">
        </a>
        <a href="">$name</a>
        <p>$price/day</p>
    </div>
    <div id="box">
        <a href="#">
        <img class ="image" src="../img/hotel.jpg" alt="house" style="width:300px; height:200px">
        </a>
        <a href="">$name</a>
        <p>$price/day</p>
    </div>
    <div id="box">
        <a href="#">
        <img class ="image" src="../img/hotel.jpg" alt="house" style="width:300px; height:200px">
        </a>
        <a href="#">$name</a>
        <p>$price/day</p>
    </div>
    <div id="box">
        <a href="#">
        <img class ="image" src="../img/hotel.jpg" alt="house" style="width:300px; height:200px">
        </a>
        <a href="">$name</a>
        <p>$price/day</p>
    </div>
    <div id="box">
        <a href="#">
        <img class ="image" src="../img/hotel.jpg" alt="house" style="width:300px; height:200px">
        </a>
        <a href="">$name</a>
        <p>$price/day</p>
    </div>
    <div id="box">
        <a href="#">
        <img class ="image" src="../img/hotel.jpg" alt="house" style="width:300px; height:200px">
        </a>
        <a href="">$name</a>
        <p>$price/day</p>
    </div>
    <div id="box">
        <a href="#">
        <img class ="image" src="../img/hotel.jpg" alt="house" style="width:300px; height:200px">
        </a>
        <a href="">$name</a>
        <p>$price/day</p>
    </div>
    <div id="box">
        <a href="#">
        <img class ="image" src="../img/hotel.jpg" alt="house" style="width:300px; height:200px">
        </a>
        <a href="">$name</a>
        <p>$price/day</p>
    </div>
    </div>
    <div class="pagination">
        <a href="#">&laquo;</a>
        <a href="#">1</a>
        <a class="active" href="#">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
        <a href="#">5</a>
        <a href="#">6</a>
        <a href="#">&raquo;</a>
    </div>
</div>
<?php include '../common/footer.php' ?>
</body>
</html>