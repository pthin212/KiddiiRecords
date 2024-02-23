<?php
    // Hàm session_id() sẽ trả về giá trị SESSION_ID (tên file session do Web Server tự động tạo)
    // Nếu trả về Rỗng hoặc NULL => chưa có file Session tồn tại
    if (session_id() === '') {
        // Yêu cầu Web Server tạo file Session để lưu trữ giá trị tương ứng với CLIENT (Web Browser đang gởi Request)
        session_start();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="200" />
    <title>Kiddii Records - Đăng ký</title>
    <link rel="icon" href="/kiddiirecords.com/assets/img/logo/brand-logo-1.png">
    
    <!-- Lien ket cac file CSS-->
    <!-- general -->
    <link href="/kiddiirecords.com/back-end/css/general.css" type="text/css" rel="stylesheet" />
    <!-- header -->
    <link href="/kiddiirecords.com/back-end/css/header.css" type="text/css" rel="stylesheet" />
    <!-- nav-menu / sidebar-->
    <link href="/kiddiirecords.com/back-end/css/nav-menu.css" type="text/css" rel="stylesheet" />
    <!-- footer -->
    <link href="/kiddiirecords.com/back-end/css/footer.css" type="text/css" rel="stylesheet" />
    <!-- admin-login-register -->
    <link href="/kiddiirecords.com/back-end/css/admin-login-register.css" type="text/css" rel="stylesheet" />
    
    <!-- Lien ket thu vien CSS -->
    <?php
    include_once __DIR__ . '/layouts/styles.php';
    ?>

    <!-- Lien ket cac font -->
    <?php
    include_once __DIR__ . '/layouts/font.php';
    ?>
</head>
<body>
    <!-- Ket noi CSDL -->
    <?php
    include_once __DIR__ . '/dbconnect.php';
    ?>

    <div class="register-area">
        <div class="container custom-container b-font">
            <div class="row pb-2">
                <div class="col-12">
                <div class="row footer1-copy">
                        <div class="col-12 flex-div">
                            <hr width="35%" class="hr1-copy" />
                        </div>
                    </div>
                    <div class="row flex-div em-2">
                        <div class="col-12 text-center">
                            <p class="mb-0 notemain">ĐĂNG KÝ TÀI KHOẢN</p>
                            <p class="p-0 m-0 note1">Nhập thông tin cho tài khoản</p>
                        </div>
                    </div>
                    <div class="row footer1-copy">
                        <div class="col-12 flex-div">
                            <hr width="35%" class="hr1-copy" />
                        </div>
                    </div>

                    <form name="frmDangKy" id="frmDangKy" method="POST" action="">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="input-lname">Họ và tên đệm người dùng</label>
                                    <input name="kh_hotendem" type="text" class="form-control" id="input-lname" maxlength="30" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="input-fname">Tên người dùng</label>
                                    <input name="kh_ten" type="text" class="form-control" id="input-fname" maxlength="10" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="select-gender">Phân quyền</label>
                            <select name="kh_gioitinh" class="form-control" id="select-gender">
                                <option value="0">Chọn cấp phân quyền tài khoản</option>
                                <option value="1">Cấp phần quyền 1</option>
                                <option value="2">Cấp phần quyền 2</option>
                                <option value="3">Cấp phần quyền 3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="select-gender">Giới tính</label>
                            <select name="kh_gioitinh" class="form-control" id="select-gender">
                                <option value="0">Nam</option>
                                <option value="1">Nữ</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="input-email">Email</label>
                            <div class="input-group">
                                <input name="kh_email" type="text" class="form-control" id="input-email" required>
                                <div class="input-group-append">
                                    <span class="input-group-text">@gmail.com</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-pnumber">Số điện thoại</label>
                            <input name="kh_sodienthoai" type="text" class="form-control" id="input-pnumber" required>
                        </div>
                        <div class="form-group">
                            <label for="input-pw">Mật khẩu</label>
                            <input name="kh_matkhau" type="password" class="form-control" id="input-pw" required>
                        </div>
                        <div class="form-group">
                            <label for="input-repw">Nhập lại mật khẩu</label>
                            <input name="kh_nlmatkhau" type="password" class="form-control" id="input-repw" required>
                        </div>
                        <button type="button" name="" class="btn btn-dark mb-5">TẠO TÀI KHOẢN</button>
                        <a href="dashboard.php" id="register-button" class="btn btn-outline-secondary mb-5">QUAY LẠI</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php
    include_once __DIR__ . '/layouts/scripts.php';
    ?>

</body>
</html>