<div class="row mt-3">
    <div class="col-12 flex-div p-1">
        <div class="db-inf-menu">
            <img src="/kiddiirecords.com/assets/img/be-img/default-ava.jpg" class="img-fluid img-user-ava">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 text-center mb-2">
        <span class="client-name">
            <?=$_SESSION['kh_hotendem']?> <?=$_SESSION['kh_ten']?>
        </span>
    </div>
</div>
<div class="row">
    <div class="col-12 db-main-menu">
        <i class="fa fa-home" aria-hidden="true"></i>
        &nbsp;
        <a href="/kiddiirecords.com/back-end/dashboard.php">Dashboard</a>
    </div>
</div>
<div class="row">
    <div class="col-12 db-main-menu">
        <i class="fa fa-table" aria-hidden="true"></i>
        &nbsp;
        Quản lý bảng
        <i class="fa fa-angle-down" aria-hidden="true"></i>
        <ul class="db-hidden-ul">
            <li><a href="/kiddiirecords.com/back-end/san-pham/index.php">1-QL "Sản phẩm"</a></li>
            <li><a href="/kiddiirecords.com/back-end/san-pham-img/index.php">2-QL "Hình sản phẩm"</a></li>
            <li><a href="/kiddiirecords.com/back-end/su-kien/index.php">3-QL "Sự kiện"</a></li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-12 db-main-menu">
        <i class="fa fa-envelope" aria-hidden="true"></i>
        &nbsp;
        <a href="#">Email</a>
    </div>
</div>
<div class="row">
    <div class="col-12 db-main-menu">
        <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
        &nbsp;
        <a href="#">Lịch</a>
    </div>
</div>
<div class="row">
    <div class="col-12 db-main-menu">
        <i class="fa fa-bar-chart" aria-hidden="true"></i>
        &nbsp;
        <a href="#">Biểu đồ</a>
    </div>
</div>
<div class="row">
    <div class="col-12 db-main-menu">
        <i class="fa fa-comments" aria-hidden="true"></i>
        &nbsp;
        <a href="#">Liên hệ</a>
    </div>
</div>
<div class="row">
    <div class="col-12 db-main-menu">
        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
        &nbsp;
        <a href="#">Biễu mẫu</a>
    </div>
</div>
<?php if(isset($_SESSION['dadangnhap']) && $_SESSION['dadangnhap']==true && $_SESSION['kh_phanquyen']>=3) :?>
    <div class="row">
        <div class="col-12 db-main-menu">
            <i class="fa fa-address-card-o" aria-hidden="true"></i>
            &nbsp;
            <a href="admin-register.php">Đăng ký</a>
        </div>
    </div>
<?php endif;?>
