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
    <title>Kiddii Records - Đăng nhập</title>
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

    <div class="login-area">
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
                            <p class="mb-0 notemain">ĐĂNG NHẬP TÀI KHOẢN</p>
                            <p class="p-0 m-0 note1">Nhập tài khoản quản lý của bạn</p>
                        </div>
                    </div>
                    <div class="row footer1-copy">
                        <div class="col-12 flex-div">
                            <hr width="35%" class="hr1-copy" />
                        </div>
                    </div>

                    <form name="frmDangNhap" id="frmDangNhap" method="POST" action="">
                        <div class="form-group">
                            <label for="input-email">Email</label>
                            <input name="kh_email" type="email" class="form-control" id="input-email">
                        </div>
                        <div class="form-group">
                            <label for="input-pw">Mật khẩu</label>
                            <input name="kh_matkhau" type="password" class="form-control" id="pw">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Ghi nhớ đăng nhập</label>
                        </div>
                        <button name="btnLogin" class="btn btn-dark mb-5">ĐĂNG NHẬP</button>
                        <a href="#" class="btn btn-outline-secondary mb-5">QUÊN MẬT KHẨU</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

        
    <?php
    include_once __DIR__ . '/layouts/scripts.php';
    ?>

    <!-- Xu li du lieu - Kiem tra dinh dung dan du lieu 2 - Sever -->
    <?php
        if(isset($_POST['btnLogin'])){
            $kh_email=$_POST['kh_email'];
            $kh_matkhau=$_POST['kh_matkhau'];

            $errors=[]; // Mang chua loi
            $sqlSelect = "SELECT * FROM khachhang WHERE kh_email='$kh_email' AND kh_matkhau='$kh_matkhau' AND kh_phanquyen>0";
            $resultSelect = mysqli_query($conn,$sqlSelect);
            $dataSelect = mysqli_fetch_array($resultSelect,MYSQLI_ASSOC);
            if(empty($dataSelect))
            {
                $errors['kh_matkhau'][]=[
                    'rule' => 'errorlogin',
                    'rule_value' => true,
                    'value' => $kh_matkhau,
                    'msg' => 'EMAIL VÀ MẬT KHẨU KHÔNG HỢP LỆ!'
                ];
            }
            if(count($errors)==0)
            {
                $_SESSION['dadangnhap'] = true;
                $_SESSION['kh_email'] = $kh_email;
                $_SESSION['kh_hotendem'] = $dataSelect['kh_hotendem'];
                $_SESSION['kh_ten'] = $dataSelect['kh_ten'];
                $_SESSION['kh_phanquyen'] = $dataSelect['kh_phanquyen'];
                $_SESSION['kh_hotendem'] = $dataSelect['kh_hotendem'];
                $_SESSION['kh_gioitinh'] = $dataSelect['kh_gioitinh'];
                $_SESSION['kh_sodienthoai'] = $dataSelect['kh_sodienthoai'];
                echo '<script>location.href="dashboard.php"</script>';
            }
        }
    ?>

    <!-- Hien thi loi - Kiem tra dinh dung dan du lieu 2 - Sever -->
    <?php if(isset($_POST['btnLogin']) && isset($errors) && count($errors)>0):?>
        <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
            <strong>
                <?php foreach($errors as $fields):?>
                    <?php foreach($fields as $f):?>
                        <?= $f['msg']?>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif;?>
</body>
</html>