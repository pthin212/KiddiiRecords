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
    <!-- prod-detail -->
    <link href="/kiddiirecords.com/front-end/css/prod-detail.css" type="text/css" rel="stylesheet" />
    
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
    <!-- Chuan bi du lieu hien thi -->
    <?php
        $sp_id = $_GET['sp_id'];

        //Noi dung cho phan chi tiet san pham va hinh dai dien san pham
        $sql_proddetail="SELECT sp.dd_id, sp.sp_id, sp_ten, sp_giagoc, sp_soluong, sp_mota, ns.ns_ten, dd.dd_ten, km.km_tyle, sp_trending
        FROM sanpham sp LEFT JOIN nghesi ns ON sp.ns_id=ns.ns_id
           LEFT JOIN dinhdang dd ON sp.dd_id=dd.dd_id
           LEFT JOIN khuyenmai km ON sp.km_id=km.km_id
        WHERE sp.sp_id=$sp_id";
        $result_proddetail=mysqli_query($conn,$sql_proddetail);
        $ds_proddetail = [];
        while($row=mysqli_fetch_array($result_proddetail,MYSQLI_ASSOC))
        {
            $ds_proddetail[] = array(
                'dd_id' => $row['dd_id'],
                'sp_id' => $row['sp_id'],
                'sp_ten' => $row['sp_ten'],
                'sp_giagoc' => $row['sp_giagoc'],
                'sp_soluong' => $row['sp_soluong'],
                'sp_mota' => $row['sp_mota'],
                'ns_ten' => $row['ns_ten'],
                'dd_ten' => $row['dd_ten'],
                'km_tyle' => $row['km_tyle'],
                'sp_trending' => $row['sp_trending']
            );
        }

        $sql_proddetail_img="SELECT hsp_src, hsp_isfontcover
        FROM hinhsanpham
        WHERE sp_id=$sp_id";
        $result_proddetail_img=mysqli_query($conn,$sql_proddetail_img);
        $ds_proddetail_img = [];
        while($row=mysqli_fetch_array($result_proddetail_img,MYSQLI_ASSOC))
        {
            $ds_proddetail_img[] = array(
                'hsp_src' => $row['hsp_src'],
                'hsp_isfontcover' => $row['hsp_isfontcover']
            );
        }
    ?>
    <div class=container-fluid>
        <!-- extra menu -->
        <div class="row extra-menu flex-div mt-2">
            <div class="col-12 text-center">
                <a href="/kiddiirecords.com/front-end/index.php" class="em-f">Trang chủ</a>
                &nbsp;/&nbsp;
                <a href="/kiddiirecords.com/front-end/prod-list.php?dd_id=0" class="em-f">Sản phẩm</a>
                &nbsp;/&nbsp;
                <a href="/kiddiirecords.com/front-end/prod-list.php?dd_id=<?=$ds_proddetail[0]['dd_id']?>" class="em-f"><?=$ds_proddetail[0]['dd_ten']?></a>
                &nbsp;/&nbsp;
                <a href="#" class="em-main">
                    <?=$ds_proddetail[0]['ns_ten']?> - <?=$ds_proddetail[0]['sp_ten']?> - <?=$ds_proddetail[0]['dd_ten']?>
                </a>
            </div>
        </div>
    </div>
    <div class="container custom-container">
        <div class="row font-main font-bold">
            <div class="col-4 text-center m-0 pt-4 pr-4 pl-4 pb-0">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <?php foreach($ds_proddetail_img as $index => $dspi):?>
                            <?php if($index==0):?>
                                <li data-target="#carouselExampleIndicators" data-slide-to="<?=$index?>" class="active"></li>
                            <?php else:?>
                                <li data-target="#carouselExampleIndicators" data-slide-to="<?=$index?>"></li>
                            <?php endif;?>
                        <?php endforeach; ?>
                    </ol>
                    <div class="carousel-inner">
                        <?php foreach($ds_proddetail_img as $index2 => $dspi):?>
                            <?php if($index2==0):?>
                                <div class="carousel-item active">
                                    <img src="/kiddiirecords.com/assets/img/uploads_productimgs/<?= $dspi['hsp_src']?>" class="d-block w-100" alt="...">
                                </div>
                            <?php else:?>
                                <div class="carousel-item">
                                    <img src="/kiddiirecords.com/assets/img/uploads_productimgs/<?= $dspi['hsp_src']?>" class="d-block w-100" alt="...">
                                </div>
                            <?php endif;?>
                        <?php endforeach; ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators"
                        data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </button>
                </div>
                <div class="mt-2 p-0 pdshare text-left">
                    Chia sẻ:
                    <a href="/kiddiirecords.com/front-end/error.php"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                    <a href="/kiddiirecords.com/front-end/error.php"><i class="fa fa-instagram" aria-hidden="true"></i></i></a>
                    <a href="/kiddiirecords.com/front-end/error.php"><i class="fa fa-twitter-square" aria-hidden="true"></i></i></a>
                    <a href="/kiddiirecords.com/front-end/error.php"><i class="fa fa-snapchat-square" aria-hidden="true"></i></i></a>
                </div>
            </div>
            <div class="col-8 mt-4">
                <form name="frmsanphamchitiet" id="frmsanphamchitiet" method="post" action="">
                    <input type="hidden" name="sp_id" id="sp_id" value="<?=$ds_proddetail[0]['sp_id']?>" />
                    <input type="hidden" name="ns_ten" id="ns_ten" value="<?=$ds_proddetail[0]['ns_ten']?>" />
                    <input type="hidden" name="sp_ten" id="sp_ten" value="<?=$ds_proddetail[0]['sp_ten']?>" />
                    <input type="hidden" name="dd_ten" id="dd_ten" value="<?=$ds_proddetail[0]['dd_ten']?>" />
                    <input type="hidden" name="sp_giagoc" id="sp_giagoc" value="<?=$ds_proddetail[0]['sp_giagoc']?>" />
                    <input type="hidden" name="km_tyle" id="km_tyle" value="<?=$ds_proddetail[0]['km_tyle']?>" />
                    <input type="hidden" name="hsp_src" id="hsp_src" value="<?= $ds_proddetail_img[0]['hsp_src'] ?>" />

                    <p class="pdshare text-center">
                        <?=$ds_proddetail[0]['ns_ten']?> - <?=$ds_proddetail[0]['sp_ten']?> - <?=$ds_proddetail[0]['dd_ten']?>
                    </p>
                    <p class="pdshare text-center">
                        SKU: prod00<?=$ds_proddetail[0]['sp_id']?>
                    </p>
                    <hr color="black" width="80%" class="br menu" />
                    <p class="pdshare text-left font-not-bold">
                        <i class="fa fa-hand-peace-o" aria-hidden="true"></i> <?=$ds_proddetail[0]['ns_ten']?> - <?=$ds_proddetail[0]['sp_ten']?> - <?=$ds_proddetail[0]['dd_ten']?><br/>
                        <i class="fa fa-hand-peace-o" aria-hidden="true"></i> CD Store in Can Tho City Vietnam<br/>
                        <i class="fa fa-hand-peace-o" aria-hidden="true"></i> Hotline: 0964.418.010<br/>
                        <i class="fa fa-hand-peace-o" aria-hidden="true"></i> Tạm thời sản phẩm này không nhận COD. Mong các bạn thông cảm. Sau khi đặt hàng các bạn vui lòng:<br/>
                        - Vui lòng chuyển khoản 100% gồm cả phí ship (các bạn đến cửa hàng pickup chỉ cần chuyển tiền đơn hàng)<br/>
                        - Nội dung chuyển khoản: ghi số điện thoại đặt hàng / mã đơn hàng
                    </p>
                    <p class="pdshare text-center">
                        <?= number_format($ds_proddetail[0]['sp_giagoc'] - $ds_proddetail[0]['sp_giagoc']*($ds_proddetail[0]['km_tyle']/100.0))?>₫/1 sản phẩm
                    </p>
                    <hr color="black" width="80%" class="br menu" />
                    <select class="custom-select" name="soluong" id="soluong" style="width: 20%">
                        <option selected value="0">Số lượng...</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                    <button name="btnAddCart" class="btn btn-info btn-addcart">Thêm vào giỏ hàng</button>
                </form>
                <p class="pdshare mt-4">
                    <i class="fa fa-globe" aria-hidden="true"></i> Free ship cod toàn quốc.<br />
                    <i class="fa fa-truck" aria-hidden="true"></i> Đơn hàng sẽ được giao từ 2-6 ngày kể từ ngày đặt
                    hàng. Để việc xử lý đơn hàng nhanh chóng,
                    KIDDII RECORDS sẽ không gọi điện xác nhận đơn hàng. Hệ thống tự động xử lý và nhân viên giao hàng sẽ liên
                    hệ trực tiếp với bạn.<br />
                    <i class="fa fa-phone" aria-hidden="true"></i> Hotline: 0964.418.010 (Hỗ trợ qua Zalo trong giờ làm
                    việc hành chính).<br />
                    <i class="fa fa-exclamation-circle" aria-hidden="true"></i> Thời hạn đổi trả cho các sản phẩm bị lỗi
                    kỹ thuật là 7 ngày kể từ ngày nhận sản phẩm. Lưu ý: hãy tháo CD ra khỏi khay đĩa cẩn thận kẻo làm
                    nứt vành trong đĩa CD, vui lòng không đổi trả nếu như
                    không phải lỗi kỹ thuật. Sản phẩm mới muốn đổi sang sản phẩm khác vui lòng không tháo seal và còn
                    nguyên tem chống giả của
                    cửa hàng.<br />
                    <i class="fa fa-exclamation-circle" aria-hidden="true"></i> Màu sắc sản phẩm có thể có chút khác
                    biệt với hình minh họa. Trong quá trình nhập liệu sản phẩm, có thể nhập sai về số lượng LP trong 1
                    chương trình đĩa than. Quý khách cần tìm các version đặc biệt vui lòng liên hệ hotline để biết thêm
                    chi tiết trước khi đặt
                    hàng.
                </p>
            </div>
        </div>
    </div>

    <?php
        if(isset($_POST['btnAddCart'])){
            $sp_id = $_POST['sp_id'];
            $ns_ten = $_POST['ns_ten'];
            $dd_ten = $_POST['dd_ten'];
            $sp_giagoc = $_POST['sp_giagoc'];
            $km_tyle = $_POST['km_tyle'];
            $hsp_src = $_POST['hsp_src'];
            $soluong = $_POST['soluong'];
            $sp_ten = $_POST['sp_ten'];

            if($soluong!=0)
            {
                // Lưu trữ giỏ hàng trong session
                // Nếu khách hàng đặt hàng cùng sản phẩm đã có trong giỏ hàng => cập nhật lại Số lượng, Thành tiền
                if (isset($_SESSION['giohangdata'])) {
                    $data = $_SESSION['giohangdata'];
                    $data[$sp_id] = array(
                        'sp_id' => $sp_id,
                        'ns_ten' => $ns_ten,
                        'dd_ten' => $dd_ten,
                        'sp_giagoc' => $sp_giagoc,
                        'km_tyle' => $km_tyle,
                        'hsp_src' => $hsp_src,
                        'soluong' => $soluong,
                        'sp_ten' => $sp_ten
                    );

                    // Lưu dữ liệu giỏ hàng vào session
                    $_SESSION['giohangdata'] = $data;
                } else { // Nếu khách hàng đặt hàng sản phẩm chưa có trong giỏ hàng => thêm vào
                    $data[$sp_id] = array(
                        'sp_id' => $sp_id,
                        'ns_ten' => $ns_ten,
                        'dd_ten' => $dd_ten,
                        'sp_giagoc' => $sp_giagoc,
                        'km_tyle' => $km_tyle,
                        'hsp_src' => $hsp_src,
                        'soluong' => $soluong,
                        'sp_ten' => $sp_ten
                    );

                    // Lưu dữ liệu giỏ hàng vào session
                    $_SESSION['giohangdata'] = $data;
                }
            }               
        }
    ?>

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