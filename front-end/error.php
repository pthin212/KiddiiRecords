<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="200" />
    <title>Kiddii Records - Bảo trì</title>
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
    <!-- error -->
    <link href="/kiddiirecords.com/front-end/css/error.css" type="text/css" rel="stylesheet" />
    
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
    <!-- header -->
    <?php
    include_once __DIR__ . '/layouts/header.php';
    ?>
    
    <!-- main area -->
    <!-- Chuan bi du lieu hien thi -->
    <?php
        
    ?>
    <!-- extra menu -->
    <div class=container-fluid>
        <div class="row extra-menu flex-div mt-2">
            <div class="col-12 text-center">
                <a href="/kiddiirecords.com/front-end/index.php" class="em-f">Trang chủ</a>
                &nbsp;/&nbsp;
                <a href="#" class="em-main">
                    Bảo trì
                </a>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- MENU -->

        <!-- emenu2-type -->
        <div class="row footer1-copy">
            <div class="col-12 flex-div">
                <hr width="40%" class="hr1-copy" />
            </div>
        </div>
        <div class="row flex-div em-2">
            <div class="col-12 text-center">
                Sản phẩm sẽ ra mắt trong thời gian tới...
            </div>
        </div>
        <div class="row footer1-copy">
            <div class="col-12 flex-div">
                <hr width="40%" class="hr1-copy" />
            </div>
        </div>
    </div>

    <!-- waiting icon -->
    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-12 flex-div">
                <img src="/kiddiirecords.com/assets/img/logo/error-img.jpg" class="dvw1" />
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
</body>
</html>