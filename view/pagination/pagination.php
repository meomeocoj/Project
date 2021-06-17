<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../view/css/paging.css">
    <link rel="stylesheet" href="../../view/css/main.css">
    <title><?php echo $location->name; ?></title>
</head>

<body>
    <?php include '../common/header.php';

    ?>
    <div class="container">
        <div class="filter">
            <div id="total">
                <?php echo $number->noOfHotel . ' hotels available in ' . $location->name; ?>
            </div>
            <div id="filter">
                <span>Price </span>
                <select name="price-filter" onchange="filter(this.value)">
                    <option value="desc-price">DESC</option>
                    <option value="asc-price">ASC</option>
                </select>
            </div>
        </div>
    </div>

    <div class="boxes">
        <?php
        foreach ($attribute as $att) {
            if ($att->price == -1) {
                $att->price = rand(500000, 1500000);
            }
            $att->price = ceil($att->price / 1000) * 1000;
            echo '<div id="box"><a href="http://localhost/Project/detail/show/?id=' . $att->hotel_id . '"><img class ="image" src="../../view/image/hotel.jpg" alt="house" style="width:300px; height:200px"></a><a href="http://localhost/Project/detail/show/?id=' . $att->hotel_id . '">' . $att->name . '</a><p>' . $att->price . '</p></div>';
        }
        ?>

    </div>
    <div class="pagination">
        <?php
        echo $contentPage;
        ?>

    </div>
    <?php include '../common/footer.php' ?>
</body>

</html>