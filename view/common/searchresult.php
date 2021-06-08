<?php
$connection = mysqli_connect('localhost', 'root', '');
if(!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$selectdb = mysqli_select_db($connection, 'hotel');
if(!$selectdb){
    die("Database Selection Failed" . mysqli_error($connection));
}

$search = $_GET['search'];
$sql = "SELECT DISTINCT hotel.name, hotel.address, hotel.province_id FROM hotel, province WHERE province.id = hotel.province_id AND province.name LIKE '%$search%' ORDER BY name DESC LIMIT 0,6";
$result = mysqli_query($connection, $sql);
$count = 0;
while($row = mysqli_fetch_assoc($result)){
    if ($count != 5) {
        echo "<li><a href='#'>".$row['name']."</a>";
    } else {
        echo "<li hidden id='province_id'>http://localhost/Project/pagination/show/?id=".$row['province_id']."&page=1</a>";
    }
    $count++;
}
?>
