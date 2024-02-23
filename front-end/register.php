<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="200" />
    <title>Kiddii Records - Đăng ký</title>
    <link rel="icon" href="/kiddiirecords.com/assets/img/logo/brand-logo-1.png">
    
    <!-- Lien ket cac file CSS-->
    <!-- general -->
    <link href="/kiddiirecords.com/front-end/css/general.css" type="text/css" rel="stylesheet" />
    <!-- header -->
    <link href="/kiddiirecords.com/front-end/css/header.css" type="text/css" rel="stylesheet" />
    <!-- footer -->
    <link href="/kiddiirecords.com/front-end/css/footer.css" type="text/css" rel="stylesheet" />
    <!-- cart -->
    <link href="/kiddiirecords.com/front-end/css/cart.css" type="text/css" rel="stylesheet" />
    <!-- index -->
    <link href="/kiddiirecords.com/front-end/css/index.css" type="text/css" rel="stylesheet" />
    <!-- login-register -->
    <link href="/kiddiirecords.com/front-end/css/login-register.css" type="text/css" rel="stylesheet" />
    
    <!-- Lien ket thu vien CSS -->
    <?php
    include_once __DIR__ . '/layouts/styles.php';
    ?>

    <!-- Lien ket cac font -->
    <?php
    include_once __DIR__ . '/layouts/font.php';
    ?>

    <!-- <style>
        div{
            border: 1px solid red;
        }
        img{
            border: 1px solid green;
        }
    </style>  -->

    <!-- iscroll-js-->
    <script type="text/javascript">
        var myScroll;
        function loaded () {
        myScroll = new IScroll('#wrapper', { eventPassthrough: true, scrollX: true, scrollY: false, preventDefault: false });
    }
    </script>

</head>
<body onload="loaded()">
    <!-- Ket noi CSDL -->
    <?php
    include_once __DIR__ . '/dbconnect.php';
    ?>

    <!-- header -->
    <?php
    include_once __DIR__ . '/layouts/header.php';
    ?>
    
    <!-- main area -->
    <div class=container-fluid>
        <!-- extra menu -->
        <div class="row extra-menu flex-div mt-2">
            <div class="col-12 text-center">
                <a href="/kiddiirecords.com/front-end/index.php" class="em-f">Trang chủ</a>
                &nbsp;/&nbsp;
                <a href="#" class="em-main">
                    Đăng ký
                </a>
            </div>
        </div>
    </div>
    <div class="container custom-container">
        <div class="row">
            <div class="col-12">
                <div class="row footer1-copy">
                    <div class="col-12 flex-div">
                        <hr width="35%" class="hr1-copy" />
                    </div>
                </div>
                <div class="row flex-div em-2">
                    <div class="col-12 text-center">
                        <p class="mb-0 notemain">TẠO TÀI KHOẢN MỚI</p>
                        <p class="p-0 m-0 note1">Nhập thông tin của bạn</p>
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
                    <button name="btnLuu" class="btn btn-dark mb-5">TẠO TÀI KHOẢN</button>
                    <a href="login.php" id="register-button" class="btn btn-outline-secondary mb-5">ĐĂNG NHẬP</a>
                </form>
            </div>
        </div>
    </div>

    <!-- Xu li du lieu - Kiem tra dinh dung dan du lieu 2 - Sever -->
    <?php
        if(isset($_POST['btnLuu'])){
            $kh_hotendem=$_POST['kh_hotendem'];
            $kh_ten=$_POST['kh_ten'];
            $kh_gioitinh=$_POST['kh_gioitinh'];
            $kh_email=$_POST['kh_email'];
            $kh_matkhau=$_POST['kh_matkhau'];
            $kh_sodienthoai=$_POST['kh_sodienthoai'];
            $kh_nlmatkhau=$_POST['kh_nlmatkhau'];

            $errors=[]; // Mang chua loi

            if($kh_matkhau!=$kh_nlmatkhau)
            {
                $errors['kh_nlmatkhau'][]=[
                    'rule' => 'notmatch',
                    'rule_value' => true,
                    'value' => $kh_nlmatkhau,
                    'msg' => 'Nhập lại mật khẩu không khớp!'
                ];
            }
            if(count($errors)==0)
            {
                $sqlInsert = "INSERT INTO khachhang(kh_hotendem,kh_ten,kh_gioitinh,kh_email,kh_matkhau,kh_phanquyen,kh_sodienthoai)
                VALUES ('$kh_hotendem','$kh_ten',$kh_gioitinh,'$kh_email@gmail.com','$kh_matkhau',0,'$kh_sodienthoai');";
                mysqli_query($conn,$sqlInsert);
                echo '<script>location.href="login.php"</script>';
            }
        }
    ?>
    <!-- Hien thi loi - Kiem tra dinh dung dan du lieu 2 - Sever -->
    <?php if(isset($_POST['btnLuu']) && isset($errors) && count($errors)>0):?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>CẦN KIỂM TRA LẠI CÁC THÔNG TIN SAU:</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <ol>
                <?php foreach($errors as $fields):?>
                    <?php foreach($fields as $f):?>
                        <li> <?= $f['msg']?>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </ol>
        </div>
    <?php endif;?>

    <?php
    include_once __DIR__ . '/layouts/footer.php';
    ?>
    <?php
    include_once __DIR__ . '/layouts/cart.php';
    ?>
    <?php
    include_once __DIR__ . '/layouts/scripts.php';
    ?>

    <script src="/kiddiirecords.com/front-end/js/index.js"></script>
    <script src="/kiddiirecords.com/front-end/js/header.js"></script>
</body>
</html>