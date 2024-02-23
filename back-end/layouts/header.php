<?php
    // Hàm session_id() sẽ trả về giá trị SESSION_ID (tên file session do Web Server tự động tạo)
    // Nếu trả về Rỗng hoặc NULL => chưa có file Session tồn tại
    if (session_id() === '') {
        // Yêu cầu Web Server tạo file Session để lưu trữ giá trị tương ứng với CLIENT (Web Browser đang gởi Request)
        session_start();
    }
    if(!(isset($_SESSION['dadangnhap']) && $_SESSION['dadangnhap']==true))
    {
        echo '<script>location.href="/kiddiirecords.com/back-end/admin-login.php"</script>';
    }
?>

<div class="be-header-background">
    <div class="container custom-container">
        <div class="row lmsc">
            <!-- menu & search  -->
            <div class="col-4 flex-div-nalign-l" id="mainlogo">
                <button type="button" class="m-0 p-0" data-toggle="modal" data-target="#exampleModal12"
                    style="border:none; background-color:white;">
                    <a href="#"><img src="/kiddiirecords.com/assets/img/logo/small-menu-logo-be.png" class="cartuser1 img-fluid" /></a>
                </button>
                <button type="button" class="m-0 p-0" data-toggle="modal" data-target="#exampleModal12"
                    style="border:none; background-color:white;">
                    <a href="#"><img src="/kiddiirecords.com/assets/img/logo/search-logo-be.png" class="cartuser1 img-fluid" /></a>
                </button>
            </div>

            <!-- logo-->
            <div class="col-4 flex-div mt-1 mb-1" id="mainlogo">
                <img src="/kiddiirecords.com/assets/img/logo/brand-logo-2-be.png" class="logo01 img-fluid">
            </div>

            <!-- log func -->
            <div class="col-4 flex-div-nalign-r" id="mainlogo">
                <a href="/kiddiirecords.com/back-end/admin-logout.php" class="mr-2 p-1 btn btn-outline-light">
                    Đăng xuất
                </a>
            </div>
        </div>
    </div>
</div>