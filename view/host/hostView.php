<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/hostView.css">
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
            <button type="button" id="add-hotel-btn" onClick=""> Add </button>
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
                    <a href="#"><button type="button" id="edit">Edit</button></a>
                    <a href="#"><button type="button" id="delete">Delete</button></a>
                </div>
            </div>
            <div class="hotel">
                <div class="hotel-name">$name</div>
                <div class="manipulation">
                    <a href="#"><button type="button" id="edit">Edit</button></a>
                    <a href="#"><button type="button" id="delete">Delete</button></a>
                </div>
            </div>
            <div class="hotel">
                <div class="hotel-name">$name</div>
                <div class="manipulation">
                    <a href="#"><button type="button" id="edit">Edit</button></a>
                    <a href="#"><button type="button" id="delete">Delete</button></a>
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

    <?php include '../common/footer.php' ?>
</body>

</html>