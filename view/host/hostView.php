<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/hostView.css"/>
    <script type="text/javascript" src="../js/hostView.js"></script>
    <title>Host Site</title>
</head>
<body>
    <?php include '../common/header.php' ?>
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
                    <a href="#"><button type="button" id="delete" onClick="deleteFunction()">Delete</button></a>
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
            <div class="hotel">
                <div class="hotel-name">$name</div>
                <div class="manipulation">
                    <a href="#"><button type="button" id="edit">Yes</button></a>
                    <a href="#"><button type="button" id="delete">No</button></a>
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
        </div>
    </main>
    <div class="add-form-container" id ="add-form-container">
        <div class="add-form">
            <form action="#" method = "POST">
            <label for="fname" class = "label-block">Name:</label>
            <input type="text" id="name" name="name" class ="input-block" required>
            <label for="fname" class = "label-block">Province:</label>
            <select name="province" onchange="filter(this.value)" class="input-block">
                <option value="$location">$province</option>
            </select>
            <label for="fname" class = "label-block">District:</label>
            <select name="province" onchange="filter(this.value)" class="input-block">
                <option value="$district">$district</option>
                <option value="$district2">$22</option>
            </select>
            <label for="fname" class = "label-block">Address:</label>
            <input type="text" id="address" name="address" class ="input-block" required>
            <label for="fname" class = "label-block">Price:</label>
            <input type="text" id="price" name="price" class ="input-block" required>
            <label for="fname" class = "label-block">Number of room</label>
            <input type="text" id="num-room" name="num-room" class ="input-block" required>
            <div class="btns">
            <input type="submit" id="add-hotel-submit" value="Add" class="btn">
            <input type="button" id = "cancel" onClick="exitAddForm()" class="btn" value = "Cancel">
            </div>
            </form>
        </div>
    </div>
    <div class="add-form-container" id ="edit-form-container">
        <div class="add-form">
            <form action="#" method = "POST">
            <label for="fname" class = "label-block">Name:</label>
            <input type="text" id="name" name="name" class ="input-block" value = "$name" required>
            <label for="fname" class = "label-block">Province:</label>
            <select name="province" onchange="filter(this.value)" class="input-block">
                <option value="$location">$province</option>
            </select>
            <label for="fname" class = "label-block">District:</label>
            <select name="province" onchange="filter(this.value)" class="input-block">
                <option value="$district">$district</option>
            </select>
            <label for="fname" class = "label-block">Address:</label>
            <input type="text" id="address" name="address" class ="input-block" value = "$address" required>
            <label for="fname" class = "label-block">Price:</label>
            <input type="text" id="price" name="price" class ="input-block" value = "$price" required>
            <label for="fname" class = "label-block">Number of room</label>
            <input type="text" id="num-room" name="num-room" class ="input-block" value = "$numberRoom" required>
            <div class="btns">
            <input type="submit" id="add-hotel-submit" value="Edit" class="btn">
            <button id = "cancel" onClick="exitEditForm()" class="btn">Cancel</button>
            </div>
            </form>
        </div>
    </div>
</body>
<?php include '../common/footer.php' ?>
</html>