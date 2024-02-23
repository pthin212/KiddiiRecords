<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="200" />
    <title>Kiddii Records - Rhythms of Growing Up</title>
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
    <!-- checkout -->
    <link href="/kiddiirecords.com/front-end/css/checkout.css" type="text/css" rel="stylesheet" />
    
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
                    Thanh toán
                </a>
            </div>
        </div>
    </div>

    <!-- Chuan bi du lieu thanh toan -->
    <?php
        // Kiểm tra và lấy dữ liệutrong session
        $giohangdata = [];
        if (isset($_SESSION['giohangdata'])) {
            $giohangdata = $_SESSION['giohangdata'];
        } else {
            $giohangdata = [];
        }
    ?>
    <!-- Giao dien chinh thanh toan -->
    <div class="container custom-container">
            <div class="row">
                <div class="col-7 blackb">
                    <p class="text-center mt-2">THÔNG TIN VẬN CHUYỂN - THANH TOÁN</p>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nhập tên của bạn" required>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Nhập email của bạn" required>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2">@gmail.com</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" placeholder="Nhập số điện thoại của bạn" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nhập địa chỉ giao hàng" required>
                        </div>
                        <div class="form-group">
                            <select class="form-control">
                                <option>Thanh toán khi nhận hàng</option>
                                <option>Chuyển khoản ngân hàng</option>
                                <option>Chuyển khoản qua ví Momo</option>
                            </select>
                        </div>

                        <span class="flex-div">
                            <button type="button" class="btn btn-dark mb-5 btn-checkout">HOÀN
                                THÀNH</button>
                            &nbsp;
                            <a href="/kiddiirecords.com/front-end/index.php" class="btn btn-outline-secondary mb-5">TRỞ VỀ TRANG
                                CHỦ</a>
                        </span>

                    </form>
                </div>
                <div class="col-5 blacknb">
                    <?php
                        $idcheckout=0;
                        $feesum=0;    
                    ?>
                    <?php foreach ($giohangdata as $sp) : ?>
                        <?php if($idcheckout==0):?>
                            <?php 
                                $idcheckout++;
                                $feesum+=($sp['sp_giagoc']-$sp['sp_giagoc']*($sp['km_tyle']/100.0))*$sp['soluong'];
                            ?>
                            <div class="row text-left mt-4 flex-div">
                                <div class="col-3">
                                    <img src="/kiddiirecords.com/assets/img/uploads_productimgs/<?= $sp['hsp_src'] ?>" class="imgthanhtoan" class="imgthanhtoan" />
                                </div>
                                <div class="col-7">
                                    <?= $sp['ns_ten'] ?> - <?= $sp['sp_ten'] ?> - <?= $sp['dd_ten'] ?>
                                    <br />
                                    Số lượng: <?=$sp['soluong'] ?>
                                </div>
                                <div class="col-2"><?= number_format($sp['sp_giagoc']-$sp['sp_giagoc']*($sp['km_tyle']/100.0))?>₫</div>
                            </div>
                        <?php else:?>
                            <?php 
                                $idcheckout++;
                                $feesum+=($sp['sp_giagoc']-$sp['sp_giagoc']*($sp['km_tyle']/100.0))*$sp['soluong'];
                            ?>
                            <div class="row text-left mt-2 flex-div">
                                <div class="col-3">
                                    <img src="/kiddiirecords.com/assets/img/uploads_productimgs/<?= $sp['hsp_src'] ?>" class="imgthanhtoan" class="imgthanhtoan" />
                                </div>
                                <div class="col-7">
                                    <?= $sp['ns_ten'] ?> - <?= $sp['sp_ten'] ?> - <?= $sp['dd_ten'] ?>
                                    <br />
                                    Số lượng: <?=$sp['soluong'] ?>
                                </div>
                                <div class="col-2"><?= number_format($sp['sp_giagoc']-$sp['sp_giagoc']*($sp['km_tyle']/100.0))?>₫</div>
                            </div>
                        <?php endif;?>
                    <?php endforeach; ?>
                    <div class="row mt-2">
                        <div class="col-12 flex-div">
                            <hr color="black" width="40%" class="hr-checkout" />
                        </div>
                    </div>
                    <div class="row blackb">
                        <div class="col-6 text-left">
                            Subtotal:
                        </div>
                        <div class="col-6 text-right">
                            <?=number_format($feesum);?>₫
                        </div>
                    </div>
                    <div class="row blackb">
                        <div class="col-6 text-left">
                            Shipping fee:
                        </div>
                        <div class="col-6 text-right">
                            <?=number_format(30000);?>₫
                        </div>
                        <?php $feesum+=30000;?>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12 flex-div">
                            <hr color="black" width="40%" class="hr-checkout" />
                        </div>
                    </div>
                    <div class="row blackb">
                        <div class="col-6 text-left">
                            TOTAL
                        </div>
                        <div class="col-6 text-right">
                            <?=number_format($feesum);?>₫
                        </div>
                    </div>
                </div>
            </div>
        </div>

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

    <script>
        $(document).ready(function() {
            // SweetAlert
            $('.btn-checkout').click(function(){
                Swal.fire({
                    icon: "success",
                    title: "Thanh toán thành công!",
                    text: "Mã đơn hàng của bạn #0100",
                    showConfirmButton: false,
                    timer: 2500
                });

                setTimeout(function() {
                    location.href = 'index.php';
                }, 2500);
            });
        });
    </script>
</body>
</html>