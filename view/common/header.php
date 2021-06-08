<!-- header -->
<div class="header">
    <nav class="nav-bar">
        <div class="nav-left">
            <a href="http://localhost/Project/" id="logo"><svg version="1.1" viewBox="0 0 50 50" id="logo-luxstay" class="svg-icon svg-fill" style="width: 50px; height: 50px;">
                    <path pid="0" d="M25.093 0c13.781.06 24.94 11.317 24.882 25.106C49.917 38.894 38.663 50.058 24.88 50 11.1 49.942-.059 38.683.001 24.894.057 11.106 11.31-.058 25.092 0zm11.801 31.9L14.398 16.053c.241-.26.48-.518.74-.777 2.7-2.687 5.971-4.031 9.775-4.015 3.804.015 7.064 1.388 9.741 4.098.238.241.476.482.694.743l-5.951 4.133 2.381 1.688 5.153-3.576v.02L39.33 16.7c-.692-1.203-1.584-2.325-2.616-3.39-3.231-3.292-7.167-4.947-11.788-4.967-4.6-.019-8.53 1.603-11.809 4.867a17.806 17.806 0 00-2.682 3.408l1.429 1.004 23.429 16.51c-.24.26-.48.518-.74.777-2.7 2.687-5.971 4.011-9.775 3.996-3.803-.016-7.063-1.37-9.74-4.08-.258-.26-.496-.521-.734-.782l6.111-4.251-.139-.181-2.183-1.528-5.373 3.735v-.021l-2.377 1.65a17.824 17.824 0 002.654 3.43c3.253 3.291 7.169 4.946 11.769 4.965 4.62.021 8.549-1.602 11.83-4.866 1.06-1.075 1.96-2.21 2.682-3.406l-2.383-1.67z"></path>
                </svg></a>
            <div class="search-bar">
                <form action="" method="POST" target="_blank"></form>
                <!--
                <input type="text" name="search-location" id="search" value="Tìm kiếm" onkeyup="showResult(this.value)">
                -->

                <!-- search suggestion add-on-->
                <input type="text" value="Tìm kiếm" name="search" id="search" onfocus="if (this.value == 'Tìm kiếm') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Tìm kiếm';}">
                <div class="result" id="results">
                </div>

                <script>
                    var results = document.getElementById("results");
                    results.style.display = 'none';
                </script>
                <!-- end of search suggestion add-on-->

                <button id="date" onClick="date()"><svg version="1.1" viewBox="0 0 14 16" class="mr--12 svg-icon svg-fill" style="width: 15px; height: 17px;">
                        <path pid="0" d="M9 2V1a1 1 0 112 0v1a3 3 0 013 3v8a3 3 0 01-3 3H3a3 3 0 01-3-3V5a3 3 0 013-3V1a1 1 0 112 0v1h4zM2 7v6a1 1 0 001 1h8a1 1 0 001-1V7H2z" fill="#666" fill-rule="evenodd"></path>
                    </svg> Ngày
                </button>

                <button id="search-btn" onClick="pagination_to_province()"><svg version="1.1" viewBox="0 0 15 15" class="svg-icon svg-fill" style="width: 20px; height: 20px; ">
                        <g stroke="#FFF" stroke-width="2" fill="none" fill-rule="evenodd">
                            <path pid="0" d="M10 10l4 4"></path>
                            <circle pid="1" cx="6.5" cy="6.5" r="5.5"></circle>
                        </g>
                    </svg>
                </button>
                </form>
            </div>
        </div>
        <div class="nav-right">
            <?php if ($_SESSION['login'] == true && $_SESSION['role'] == "host") : ?>
                <div id="register">
                    <a href="#"><?php echo $_SESSION['username'] ?></a>
                </div>
                <div id="login">
                    <a href="http://localhost/Project/host/show">Host</a>
                </div>
                <div id="logout">
                    <a href="http://localhost/Project/home/logout">Log out</a>
                </div>
            <?php elseif ($_SESSION['login'] == true && $_SESSION['role'] == "guest") : ?>
                <div id="register">
                    <a href="#"><?php echo $_SESSION['username'] ?></a>
                </div>
                <div id="logout">
                    <a href="http://localhost/Project/home/logout">Log out</a>
                </div>
            <?php else : ?>
                <div id="register">
                    <a href="http://localhost/Project/signup/show">Đăng kí</a>
                </div>
                <div id="login">
                    <a href="http://localhost/Project/login/show">Đăng nhập</a>
                </div>
            <?php endif; ?>
        </div>
</div>
</div>
</body>

</html>
<!-- end header -->