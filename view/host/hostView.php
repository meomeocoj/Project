<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/Project/view/css/hostView.css" />
    <link rel="stylesheet" href="http://localhost/Project/view/css/main.css" />
    <script type="text/javascript" src="http://localhost/Project/view/js/hostView.js"></script>
    <title>Host Site</title>
</head>

<body>
    <?php
    require $_SERVER['DOCUMENT_ROOT'] . '/Project/view/common/header.php';
    ?>
    <main class="container">
        <div class="option">
            <button type="button" name="list-hotel" value="list-hotel" id="list-hotel" onClick="viewList()">List</button>
            <button type="button" name="view-orders" value="view-orders" id="view-orders" onClick="viewOrder()">View Orders</button>
        </div>
        <div class="search-hotel-add-hotel">
            <input type="text" name="search-hotel" id="search-hotel" value="Hotel name ...">
            <button type="button" id="add-hotel-btn" onClick="addHotel()"> Add </button>
        </div>
        <div class="absolute-container">
            <!--container-list-->
            <div class="container-list">
                <div class="name-function">
                    <h3 id="name">Name</h3>
                    <h3 id="function">Function</h3>
                </div>
                <div class="list-hotel">
                    <div class="hotel">
                        <div class="hotel-name">$name</div>
                        <div class="manipulation">
                            <a href="#"><button type="button" id="edit" onclick="editForm()">Edit</button></a>
                            <a href="http://localhost/Project/host/delete"><button type="button" id="delete" onClick="deleteFunction()">Delete</button></a>
                        </div>
                    </div>
                    <div class="hotel">
                        <div class="hotel-name">$name</div>
                        <div class="manipulation">
                            <a href="#"><button type="button" id="edit" onClick="editForm()">Edit</button></a>
                            <a href="#"><button type="button" id="delete" onClick="deleteFunction()">Delete</button></a>
                        </div>
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
            <!--view orders=-->
            <div class="container-order">
                <div class="name-function">
                    <h3 id="name">Name</h3>
                    <h3 id="function">Function</h3>
                </div>
                <div class="list-hotel">
                    <?php foreach ($receipts as $receipt): ?>
                        <div class="hotel">
                            <div class="hotel-name"><?php echo "<i>Booking</i> for hotel ID " . $receipt->hotel_id; ?></div>
                            <div class="manipulation">
                                <a href="#"><button type="button" id="edit">Yes</button></a>
                                <a href="#"><button type="button" id="delete">No</button></a>
                            </div>
                        </div>
                    <?php endforeach; ?>
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
        </div>
    </main>
    <div class="add-form-container" id="add-form-container">
        <div class="add-form">
            <form action="http://localhost/Project/host/add" method="POST">
                <label for="fname" class="label-block">Hotel name:</label>
                <input type="text" id="hotelName" name="hotelName" class="input-block" required>
                <label for="fname" class="label-block">Province:</label>
                <select name="provinceName" onchange="filter(this.value)" class="input-block">
                    <?php foreach ($provinces as $province) : ?>
                        <option value="<?php echo $province->name ?>"><?php echo $province->name ?></option>
                    <?php endforeach; ?>
                </select>
                <label for="fname" class="label-block">District:</label>
                <select name="districtName" onchange="filter(this.value)" class="input-block">
                    <?php foreach ($districts as $district) : ?>
                        <option value="<?php echo $district->name ?>"><?php echo $district->name ?></option>
                    <?php endforeach; ?>
                </select>
                <label for="fname" class="label-block">Address:</label>
                <input type="text" id="address-add" name="addressName" class="input-block" required>
                <label for="fname" class="label-block">Price:</label>
                <input type="text" id="price-add" name="priceValue" class="input-block" required>
                <label for="fname" class="label-block">Number of room</label>
                <input type="text" id="num-room-add" name="numRoom" class="input-block" required>
                <div class="btns">
                    <input type="submit" id="add-hotel-submit" value="Add" class="btn" name="addButton">
                    <input type="button" id="cancel" onClick="exitAddForm()" class="btn" value="Cancel">
                </div>
            </form>
            <button id="cancel-add" onClick="exitAddForm()" class="btn">Cancel</button>
        </div>
    </div>
    <div class="add-form-container" id="edit-form-container">
        <div class="add-form">
            <form action="http://localhost/Project/host/update" method="POST">
                <label for="fname" class="label-block">Name:</label>
                <input type="text" id="name" name="name" class="input-block" value="$name" required>
                <label for="fname" class="label-block">Province:</label>
                <select name="province" onchange="filter(this.value)" class="input-block">
                    <option value="$location">$province</option>
                </select>
                <label for="fname" class="label-block">District:</label>
                <select name="province" onchange="filter(this.value)" class="input-block">
                    <option value="$district">$district</option>
                </select>
                <label for="fname" class="label-block">Address:</label>
                <input type="text" id="address-edit" name="address" class="input-block" value="$address" required>
                <label for="fname" class="label-block">Price:</label>
                <input type="text" id="price-edit" name="price" class="input-block" value="$price" required>
                <label for="fname" class="label-block">Number of room</label>
                <input type="text" id="num-room-edit" name="num-room" class="input-block" value="$numberRoom" required>
                <div class="btns">
                    <input type="submit" id="add-hotel-submit-edit" value="Edit" class="btn" name="editButton">
                    <button id="cancel-edit" onClick="exitEditForm()" class="btn">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</body>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/Project/view/common/footer.php';
?>

</html>