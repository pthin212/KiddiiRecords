<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="200" />
    <title>Kiddii Records - Đăng nhập</title>
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
                    <?php if(isset($_SESSION['dadangnhap']) && $_SESSION['dadangnhap']==true):?>
                        Quản lý tài khoản
                    <?php else:?>
                        Đăng nhập
                    <?php endif;?>
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
                            <?php if(isset($_SESSION['dadangnhap']) && $_SESSION['dadangnhap']==true):?>
                                <p class="mb-0 notemain">QUẢN LÝ TÀI KHOẢN</p>
                                <p class="p-0 m-0 note1">Thông tin chi tiết tài khoản người dùng</p>
                            <?php else:?>
                                <p class="mb-0 notemain">ĐĂNG NHẬP TÀI KHOẢN</p>
                                <p class="p-0 m-0 note1">Nhập email và mật khẩu của bạn</p>
                            <?php endif;?>
                    </div>
                </div>
                <div class="row footer1-copy">
                    <div class="col-12 flex-div">
                        <hr width="35%" class="hr1-copy" />
                    </div>
                </div>
                                
                <?php if(isset($_SESSION['dadangnhap']) && $_SESSION['dadangnhap']==true):?>
                    <form name="frmChiTietTaiKhoan" id="frmChiTietTaiKhoan" method="POST" action="">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <label for="input-hotendem">Họ và tên đệm người dùng</label>
                                    <input name="kh_hotendem" type="text" class="form-control" id="input-hotendem" disabled value="<?=$_SESSION['kh_hotendem']?>">
                                </div>
                                <div class="col-6">
                                <label for="input-ten">Tên người dùng</label>
                                    <input name="kh_ten" type="text" class="form-control" id="input-ten" disabled value="<?=$_SESSION['kh_ten']?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-gender">Giới tính</label>
                            <input name="kh_gioitinh" type="text" class="form-control" id="input-gender" disabled
                            <?php if($_SESSION['kh_gioitinh']==0):?>
                                value="Nam"
                            <?php else:?>
                                value="Nữ"
                            <?php endif;?>
                            >
                        </div>
                        <div class="form-group">
                            <label for="input-email">Email</label>
                            <input name="kh_email" type="email" class="form-control" id="input-email" disabled value="<?=$_SESSION['kh_email']?>">
                        </div>
                        <div class="form-group">
                            <label for="input-phnumber">Số điện thoại</label>
                            <input name="kh_sodienthoai" type="text" class="form-control" id="input-phnumber" disabled value="<?=$_SESSION['kh_sodienthoai']?>">
                        </div>
                        <button name="#" class="btn btn-dark mb-5">SỬA THÔNG TIN</button>
                        <a href="index.php" class="btn btn-outline-secondary mb-5">TRỞ VỀ TRANG CHỦ</a>
                    </form>
                <?php else:?>
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
                        <a href="register.php" id="register-button" class="btn btn-outline-secondary mb-5">TẠO TÀI KHOẢN MỚI</a>
                    </form>
                <?php endif;?>
            </div>
        </div>
    </div>

    <!-- Xu li du lieu - Kiem tra dinh dung dan du lieu 2 - Sever -->
    <?php
        if(isset($_POST['btnLogin'])){
            $kh_email=$_POST['kh_email'];
            $kh_matkhau=$_POST['kh_matkhau'];

            $errors=[]; // Mang chua loi
            $sqlSelect = "SELECT * FROM khachhang WHERE kh_email='$kh_email' AND kh_matkhau='$kh_matkhau'";
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
                $_SESSION['kh_ten'] = $dataSelect['kh_ten'];
                $_SESSION['kh_phanquyen'] = $dataSelect['kh_phanquyen'];
                $_SESSION['kh_hotendem'] = $dataSelect['kh_hotendem'];
                $_SESSION['kh_gioitinh'] = $dataSelect['kh_gioitinh'];
                $_SESSION['kh_sodienthoai'] = $dataSelect['kh_sodienthoai'];
                echo '<script>location.href="index.php"</script>';
            }
        }
    ?>

    <!-- Hien thi loi - Kiem tra dinh dung dan du lieu 2 - Sever -->
    <?php if(isset($_POST['btnLogin']) && isset($errors) && count($errors)>0):?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
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