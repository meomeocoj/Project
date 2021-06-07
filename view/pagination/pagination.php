<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../view/css/paging.css">
    <link rel="stylesheet" href="../../view/css/main.css">
<<<<<<< HEAD
<<<<<<< HEAD
    <title><?php echo $location->name; ?></title>
=======
    <title><?php echo '$location' ?></title>
>>>>>>> f52e8b0aba7810e0e9b860792a9455129482bbc1
=======
    <title><?php echo $location->name; ?></title>
>>>>>>> d4e4a30dbdafdd5c630d95b26d4736ab31587fec
</head>

<body>
    <?php include '../common/header.php'; ?>
    <div class="container">
        <div class="filter">
            <!--        <div id="total">-->
            <!--            $total hotel available in $location-->
            <!--        </div>-->
            <div id="filter">
                <span>Price </span>
                <select name="price-filter" onchange="filter(this.value)">
                    <option value="desc-price">DESC</option>
                    <option value="asc-price">ASC</option>
                </select>
            </div>
        </div>
<<<<<<< HEAD
<<<<<<< HEAD
    </div>
    <div class="boxes">
        <?php
            echo $contentPage;
            ?>
<!--    <div id="box">-->
<!--        <a href="#">-->
<!--        <img class ="image" src="../../view/image/hotel.jpg" alt="house" style="width:300px; height:200px">-->
<!--        </a>-->
<!--        <a href="">--><?php //echo $name; ?><!--</a>-->
<!--        <p>$price/day</p>-->
<!--    </div>-->
<!--    <div id="box">-->
<!--        <a href="#">-->
<!--        <img class ="image" src="../../view/image/hotel.jpg" alt="house" style="width:300px; height:200px">-->
<!--        </a>-->
<!--        <a href="">--><?php //echo $name; ?><!--</a>-->
<!--        <p>$price/day</p>-->
<!--    </div>-->
<!--    <div id="box">-->
<!--        <a href="#">-->
<!--        <img class ="image" src="../../view/image/hotel.jpg" alt="house" style="width:300px; height:200px">-->
<!--        </a>-->
<!--        <a href="">$name</a>-->
<!--        <p>$price/day</p>-->
<!--    </div>-->
<!--    <div id="box">-->
<!--        <a href="#">-->
<!--        <img class ="image" src="../../view/image/hotel.jpg" alt="house" style="width:300px; height:200px">-->
<!--        </a>-->
<!--        <a href="">$name</a>-->
<!--        <p>$price/day</p>-->
<!--    </div>-->
<!--    <div id="box">-->
<!--        <a href="#">-->
<!--        <img class ="image" src="../../view/image/hotel.jpg" alt="house" style="width:300px; height:200px">-->
<!--        </a>-->
<!--        <a href="">$name</a>-->
<!--        <p>$price/day</p>-->
<!--    </div>-->
<!--    <div id="box">-->
<!--        <a href="#">-->
<!--        <img class ="image" src="../../view/image/hotel.jpg" alt="house" style="width:300px; height:200px">-->
<!--        </a>-->
<!--        <a href="#">$name</a>-->
<!--        <p>$price/day</p>-->
<!--    </div>-->
<!--    <div id="box">-->
<!--        <a href="#">-->
<!--        <img class ="image" src="../../view/image/hotel.jpg" alt="house" style="width:300px; height:200px">-->
<!--        </a>-->
<!--        <a href="">$name</a>-->
<!--        <p>$price/day</p>-->
<!--    </div>-->
<!--    <div id="box">-->
<!--        <a href="#">-->
<!--        <img class ="image" src="../../view/image/hotel.jpg" alt="house" style="width:300px; height:200px">-->
<!--        </a>-->
<!--        <a href="">$name</a>-->
<!--        <p>$price/day</p>-->
<!--    </div>-->
<!--    <div id="box">-->
<!--        <a href="#">-->
<!--        <img class ="image" src="../../view/image/hotel.jpg" alt="house" style="width:300px; height:200px">-->
<!--        </a>-->
<!--        <a href="">$name</a>-->
<!--        <p>$price/day</p>-->
<!--    </div>-->
<!--    <div id="box">-->
<!--        <a href="#">-->
<!--        <img class ="image" src="../../view/image/hotel.jpg" alt="house" style="width:300px; height:200px">-->
<!--        </a>-->
<!--        <a href="">$name</a>-->
<!--        <p>$price/day</p>-->
<!--    </div>-->
<!--    <div id="box">-->
<!--        <a href="#">-->
<!--        <img class ="image" src="../../view/image/hotel.jpg" alt="house" style="width:300px; height:200px">-->
<!--        </a>-->
<!--        <a href="">$name</a>-->
<!--        <p>$price/day</p>-->
<!--    </div>-->
    </div>
    <div class="pagination">
        <?php
        echo $contentPage;
        ?>
<!--        <a href="#">&laquo;</a>-->
<!--        <a class="active" href="#">1</a>-->
<!--        <a href="#">2</a>-->
<!--        <a href="#">3</a>-->
<!--        <a href="#">4</a>-->
<!--        <a href="#">5</a>-->
<!--        <a href="#">6</a>-->
<!--        <a href="#">&raquo;</a>-->
=======
=======
>>>>>>> d4e4a30dbdafdd5c630d95b26d4736ab31587fec
        <div class="boxes">
            <?php
            foreach ($attribute as $att) {
                if ($att->min_price == -1) {
                    $att->min_price = rand(500000, 1500000) . '.0';
                }
                echo '<div id="box"><a href="#"><img class ="image" src="../../view/image/hotel.jpg" alt="house" style="width:300px; height:200px"></a><a href="">' . $att->name . '</a><p>' . $att->min_price . '</p></div>';
            }
            ?>
            <!--    <div id="box">-->
            <!--        <a href="#">-->
            <!--        <img class ="image" src="../../view/image/hotel.jpg" alt="house" style="width:300px; height:200px">-->
            <!--        </a>-->
            <!--        <a href="">--><?php //echo $name; 
                                        ?>
            <!--</a>-->
            <!--        <p>$price/day</p>-->
            <!--    </div>-->
            <!--    <div id="box">-->
            <!--        <a href="#">-->
            <!--        <img class ="image" src="../../view/image/hotel.jpg" alt="house" style="width:300px; height:200px">-->
            <!--        </a>-->
            <!--        <a href="">--><?php //echo $name; 
                                        ?>
            <!--</a>-->
            <!--        <p>$price/day</p>-->
            <!--    </div>-->
            <!--    <div id="box">-->
            <!--        <a href="#">-->
            <!--        <img class ="image" src="../../view/image/hotel.jpg" alt="house" style="width:300px; height:200px">-->
            <!--        </a>-->
            <!--        <a href="">$name</a>-->
            <!--        <p>$price/day</p>-->
            <!--    </div>-->
            <!--    <div id="box">-->
            <!--        <a href="#">-->
            <!--        <img class ="image" src="../../view/image/hotel.jpg" alt="house" style="width:300px; height:200px">-->
            <!--        </a>-->
            <!--        <a href="">$name</a>-->
            <!--        <p>$price/day</p>-->
            <!--    </div>-->
            <!--    <div id="box">-->
            <!--        <a href="#">-->
            <!--        <img class ="image" src="../../view/image/hotel.jpg" alt="house" style="width:300px; height:200px">-->
            <!--        </a>-->
            <!--        <a href="">$name</a>-->
            <!--        <p>$price/day</p>-->
            <!--    </div>-->
            <!--    <div id="box">-->
            <!--        <a href="#">-->
            <!--        <img class ="image" src="../../view/image/hotel.jpg" alt="house" style="width:300px; height:200px">-->
            <!--        </a>-->
            <!--        <a href="#">$name</a>-->
            <!--        <p>$price/day</p>-->
            <!--    </div>-->
            <!--    <div id="box">-->
            <!--        <a href="#">-->
            <!--        <img class ="image" src="../../view/image/hotel.jpg" alt="house" style="width:300px; height:200px">-->
            <!--        </a>-->
            <!--        <a href="">$name</a>-->
            <!--        <p>$price/day</p>-->
            <!--    </div>-->
            <!--    <div id="box">-->
            <!--        <a href="#">-->
            <!--        <img class ="image" src="../../view/image/hotel.jpg" alt="house" style="width:300px; height:200px">-->
            <!--        </a>-->
            <!--        <a href="">$name</a>-->
            <!--        <p>$price/day</p>-->
            <!--    </div>-->
            <!--    <div id="box">-->
            <!--        <a href="#">-->
            <!--        <img class ="image" src="../../view/image/hotel.jpg" alt="house" style="width:300px; height:200px">-->
            <!--        </a>-->
            <!--        <a href="">$name</a>-->
            <!--        <p>$price/day</p>-->
            <!--    </div>-->
            <!--    <div id="box">-->
            <!--        <a href="#">-->
            <!--        <img class ="image" src="../../view/image/hotel.jpg" alt="house" style="width:300px; height:200px">-->
            <!--        </a>-->
            <!--        <a href="">$name</a>-->
            <!--        <p>$price/day</p>-->
            <!--    </div>-->
            <!--    <div id="box">-->
            <!--        <a href="#">-->
            <!--        <img class ="image" src="../../view/image/hotel.jpg" alt="house" style="width:300px; height:200px">-->
            <!--        </a>-->
            <!--        <a href="">$name</a>-->
            <!--        <p>$price/day</p>-->
            <!--    </div>-->
        </div>
        <div class="pagination">
            <?php
            $active = array("", "", "", "", "", "", "", "");
            $active[$page - 1] = "class=\"active\"";
            //        $active[$province_id-1] = "class=\"active\"";
            //echo '<a href="#">&laquo;</a><a class="active" href="?id='.$province_id.'&page=1">1</a><a href="?id='.$province_id.'&page=2">2</a><a href="?id='.$province_id.'&page=3">3</a><a href="?id='.$province_id.'&page=4">4</a><a href="?id='.$province_id.'&page=5">5</a><a href="?id='.$province_id.'&page=6">6</a><a href="?id='.$province_id.'&page=7">7</a><a href="?id='.$province_id.'&page=8">8</a><a href="#">&raquo;</a>';
            echo '<a href="#">&laquo;</a><a ' . $active[0] . ' href="?id=' . $province_id . '&page=1">1</a><a ' . $active[1] . ' href="?id=' . $province_id . '&page=2">2</a><a ' . $active[2] . ' href="?id=' . $province_id . '&page=3">3</a><a ' . $active[3] . ' href="?id=' . $province_id . '&page=4">4</a><a ' . $active[4] . ' href="?id=' . $province_id . '&page=5">5</a><a ' . $active[5] . ' href="?id=' . $province_id . '&page=6">6</a><a ' . $active[6] . ' href="?id=' . $province_id . '&page=7">7</a><a ' . $active[7] . ' href="?id=' . $province_id . '&page=8">8</a><a href="#">&raquo;</a>';
            ?>
            <!--        <a href="#">&laquo;</a>-->
            <!--        <a class="active" href="#">1</a>-->
            <!--        <a href="#">2</a>-->
            <!--        <a href="#">3</a>-->
            <!--        <a href="#">4</a>-->
            <!--        <a href="#">5</a>-->
            <!--        <a href="#">6</a>-->
            <!--        <a href="#">&raquo;</a>-->
        </div>
<<<<<<< HEAD
>>>>>>> f52e8b0aba7810e0e9b860792a9455129482bbc1
=======
=======
    </div>
    <div class="boxes">
        <?php
            foreach($attribute as $att) {
                if($att->price == -1) {
                    $att->price = rand(500000,1500000).'.0';
                }
                echo '<div id="box"><a href="http://localhost/Project/detail/show/?id='.$att->hotel_id.'"><img class ="image" src="../../view/image/hotel.jpg" alt="house" style="width:300px; height:200px"></a><a href="http://localhost/Project/detail/show/?id='.$att->hotel_id.'">' . $att->name . '</a><p>'.$att->price.'</p></div>';
            }
            ?>
<!--    <div id="box">-->
<!--        <a href="#">-->
<!--        <img class ="image" src="../../view/image/hotel.jpg" alt="house" style="width:300px; height:200px">-->
<!--        </a>-->
<!--        <a href="">--><?php //echo $name; ?><!--</a>-->
<!--        <p>$price/day</p>-->
<!--    </div>-->
<!--    <div id="box">-->
<!--        <a href="#">-->
<!--        <img class ="image" src="../../view/image/hotel.jpg" alt="house" style="width:300px; height:200px">-->
<!--        </a>-->
<!--        <a href="">--><?php //echo $name; ?><!--</a>-->
<!--        <p>$price/day</p>-->
<!--    </div>-->
<!--    <div id="box">-->
<!--        <a href="#">-->
<!--        <img class ="image" src="../../view/image/hotel.jpg" alt="house" style="width:300px; height:200px">-->
<!--        </a>-->
<!--        <a href="">$name</a>-->
<!--        <p>$price/day</p>-->
<!--    </div>-->
<!--    <div id="box">-->
<!--        <a href="#">-->
<!--        <img class ="image" src="../../view/image/hotel.jpg" alt="house" style="width:300px; height:200px">-->
<!--        </a>-->
<!--        <a href="">$name</a>-->
<!--        <p>$price/day</p>-->
<!--    </div>-->
<!--    <div id="box">-->
<!--        <a href="#">-->
<!--        <img class ="image" src="../../view/image/hotel.jpg" alt="house" style="width:300px; height:200px">-->
<!--        </a>-->
<!--        <a href="">$name</a>-->
<!--        <p>$price/day</p>-->
<!--    </div>-->
<!--    <div id="box">-->
<!--        <a href="#">-->
<!--        <img class ="image" src="../../view/image/hotel.jpg" alt="house" style="width:300px; height:200px">-->
<!--        </a>-->
<!--        <a href="#">$name</a>-->
<!--        <p>$price/day</p>-->
<!--    </div>-->
<!--    <div id="box">-->
<!--        <a href="#">-->
<!--        <img class ="image" src="../../view/image/hotel.jpg" alt="house" style="width:300px; height:200px">-->
<!--        </a>-->
<!--        <a href="">$name</a>-->
<!--        <p>$price/day</p>-->
<!--    </div>-->
<!--    <div id="box">-->
<!--        <a href="#">-->
<!--        <img class ="image" src="../../view/image/hotel.jpg" alt="house" style="width:300px; height:200px">-->
<!--        </a>-->
<!--        <a href="">$name</a>-->
<!--        <p>$price/day</p>-->
<!--    </div>-->
<!--    <div id="box">-->
<!--        <a href="#">-->
<!--        <img class ="image" src="../../view/image/hotel.jpg" alt="house" style="width:300px; height:200px">-->
<!--        </a>-->
<!--        <a href="">$name</a>-->
<!--        <p>$price/day</p>-->
<!--    </div>-->
<!--    <div id="box">-->
<!--        <a href="#">-->
<!--        <img class ="image" src="../../view/image/hotel.jpg" alt="house" style="width:300px; height:200px">-->
<!--        </a>-->
<!--        <a href="">$name</a>-->
<!--        <p>$price/day</p>-->
<!--    </div>-->
<!--    <div id="box">-->
<!--        <a href="#">-->
<!--        <img class ="image" src="../../view/image/hotel.jpg" alt="house" style="width:300px; height:200px">-->
<!--        </a>-->
<!--        <a href="">$name</a>-->
<!--        <p>$price/day</p>-->
<!--    </div>-->
    </div>
    <div class="pagination">
        <?php
        echo $contentPage;
        ?>
<!--        <a href="#">&laquo;</a>-->
<!--        <a class="active" href="#">1</a>-->
<!--        <a href="#">2</a>-->
<!--        <a href="#">3</a>-->
<!--        <a href="#">4</a>-->
<!--        <a href="#">5</a>-->
<!--        <a href="#">6</a>-->
<!--        <a href="#">&raquo;</a>-->
>>>>>>> 6caad0c5eabec677df2053bf5317078e7b3822ac
>>>>>>> d4e4a30dbdafdd5c630d95b26d4736ab31587fec
    </div>
    <?php include '../common/footer.php' ?>
</body>

</html>