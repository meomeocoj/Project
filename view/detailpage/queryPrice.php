<?php
$connection = mysqli_connect('localhost', 'root', '');
if(!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$selectdb = mysqli_select_db($connection, 'hotel2');
if(!$selectdb){
    die("Database Selection Failed" . mysqli_error($connection));
}

$hotel_id = $_GET['hotel_id'];
$sql = "SELECT price FROM hotel WHERE id = $hotel_id";
$result = mysqli_query($connection, $sql);
while($row = mysqli_fetch_assoc($result)){
    echo $row['price'];
}
?>