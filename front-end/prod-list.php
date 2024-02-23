<!DOCTYPE html>
<html lang="en">

<!-- Ket noi CSDL -->
<?php
    include_once __DIR__ . '/dbconnect.php';
?>

<!-- Lay du lieu ve dinh dang -->
<?php
    $dd_id = $_GET['dd_id'];

    $sql_dd="SELECT * FROM dinhdang where dd_id=$dd_id";
    $result_dd=mysqli_query($conn,$sql_dd);
    $ds_dd = [];
    while($row=mysqli_fetch_array($result_dd,MYSQLI_ASSOC))
    {
        $ds_dd[] = array(
            'dd_id' => $row['dd_id'],
            'dd_ten' => $row['dd_ten']
        );
    }
    if($dd_id>3) $ds_dd[0]['dd_ten']="Khác";
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="200" />
    <title>
        Kiddii Records - 
        <?php if($dd_id!=0):?>
            <?=$ds_dd[0]['dd_ten']?>
        <?php else:?>
            Sản phẩm
        <?php endif;?>
    
    </title>
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
    <!-- prod-list -->
    <link href="/kiddiirecords.com/front-end/css/prod-list.css" type="text/css" rel="stylesheet" />
    
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
                <?php if($dd_id==0):?>
                    <a href="#" class="em-main">Sản phẩm</a>
                <?php else:?>
                    <a href="/kiddiirecords.com/front-end/prod-list.php?dd_id=0" class="em-f">Sản phẩm</a>
                    &nbsp;/&nbsp;
                    <a href="#" class="em-main">
                        <?=$ds_dd[0]['dd_ten']?>
                    </a>
                <?php endif;?>
            </div>
        </div>
    </div>
    <!-- main render -->
    <div class="container custom-container">
        <!-- MENU -->

        <!-- emenu2-type -->
        <div class="row footer1-copy">
            <div class="col-12 flex-div">
                <hr width="35%" class="hr1-copy" />
            </div>
        </div>
        <div class="row flex-div em-2 text-center">
            <div class="col-2"></div>
            <div class="col-2"><a href="/kiddiirecords.com/front-end/prod-list.php?dd_id=1" >ĐĨA NÉN</a></div>
            <div class="col-2"><a href="/kiddiirecords.com/front-end/prod-list.php?dd_id=2" >ĐĨA THAN</a></div>
            <div class="col-2"><a href="/kiddiirecords.com/front-end/prod-list.php?dd_id=3" >BĂNG TỪ</a></div>
            <div class="col-2"><a href="/kiddiirecords.com/front-end/prod-list.php?dd_id=4" >ẤN PHẨM KHÁC</a></div>
            <div class="col-2"></div>
        </div>
        <div class="row footer1-copy">
            <div class="col-12 flex-div">
                <hr width="35%" class="hr1-copy" />
            </div>
        </div>

        <!-- MENU TITLE -->
        <div class="row maintittle-1 flex-div p-0 m-0">
            <?php if($dd_id!=0):?>
                <h1><?=$ds_dd[0]['dd_ten']?></h1>
            <?php else:?>
                <h1>Sản phẩm</h1>
            <?php endif;?>
        </div>
        <div class="row flex-div">
            <div class="col-5 menutype1 mr-1">
                <ul class="m-0 p-0">
                    <li>SẮP XẾP THEO <i class="fa fa-caret-down" aria-hidden="true"></i>
                        <ul class="menulv2">
                            <li><a href="#">Giá tăng dần</a>
                                <hr class="hrmenu" />
                            </li>
                            <li><a href="#">Giá giảm dần</a>
                                <hr class="hrmenu" />
                            </li>
                            <li><a href="#">Sản phẩm xu hướng</a>
                                <hr class="hrmenu" />
                            </li>
                            <li><a href="#">Sản phẩm mới</a>
                                <hr class="hrmenu" />
                            </li>
                            <li><a href="#">Giá ưu đãi</a>
                                <hr class="hrmenu" />
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-5 menutype1 mr-1">
                <ul class="m-0 p-0">
                    <li>TÌNH TRẠNG KHO <i class="fa fa-caret-down" aria-hidden="true"></i>
                        <ul class="menulv2">
                            <li><a href="#">Có sẵn</a>
                                <hr class="hrmenu" />
                            </li>
                            <li><a href="#">Hết hàng</a>
                                <hr class="hrmenu" />
                            </li>
                            <li><a href="#">Preorder</a>
                                <hr class="hrmenu" />
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row footer1-copy">
            <div class="col-12 flex-div ">
                <hr width="100%" class="hr1-copy" />
            </div>
        </div>

        <!-- PRODUCTS -->
        <!-- Chuan bi du lieu danh sach san pham -->
        <?php
            if($dd_id==0)
            {
                $sql_prod_list="SELECT sp.sp_id,sp.sp_ten,sp.sp_giagoc,sp.sp_trending,ns.ns_ten,dd.dd_ten,km.km_tyle,km.km_khac,hsp.hsp_src
                FROM sanpham sp LEFT JOIN nghesi ns ON sp.ns_id=ns.ns_id
                    LEFT JOIN hinhsanpham hsp ON sp.sp_id=hsp.sp_id
                    LEFT JOIN dinhdang dd ON sp.dd_id=dd.dd_id
                    LEFT JOIN khuyenmai km ON sp.km_id=km.km_id
                WHERE (hsp.hsp_src IS NOT NULL AND hsp.hsp_isfontcover = 1) OR (hsp.hsp_src IS NULL)";
            }
            else
            {
                $sql_prod_list="SELECT sp.sp_id,sp.sp_ten,sp.sp_giagoc,sp.sp_trending,ns.ns_ten,dd.dd_ten,km.km_tyle,km.km_khac,hsp.hsp_src
                FROM sanpham sp LEFT JOIN nghesi ns ON sp.ns_id=ns.ns_id
                    LEFT JOIN hinhsanpham hsp ON sp.sp_id=hsp.sp_id
                    LEFT JOIN dinhdang dd ON sp.dd_id=dd.dd_id
                    LEFT JOIN khuyenmai km ON sp.km_id=km.km_id
                WHERE ((hsp.hsp_src IS NOT NULL AND hsp.hsp_isfontcover = 1) OR (hsp.hsp_src IS NULL)) AND sp.dd_id=$dd_id";
            }
            $result_prod_list=mysqli_query($conn,$sql_prod_list);
            $ds_prod_list = [];
            while($row=mysqli_fetch_array($result_prod_list,MYSQLI_ASSOC))
            {
                $ds_prod_list[] = array(
                    'sp_id' => $row['sp_id'],
                    'sp_ten' => $row['sp_ten'],
                    'sp_giagoc' => $row['sp_giagoc'],
                    'sp_trending' => $row['sp_trending'],
                    'ns_ten' => $row['ns_ten'],
                    'dd_ten' => $row['dd_ten'],
                    'km_tyle' => $row['km_tyle'],
                    'km_khac' => $row['km_khac'],
                    'hsp_src' => $row['hsp_src'],
                );
            }
        ?>
        <!-- Danh sach san pham -->
        <?php
            $maxindex=0;
            $real_max_index = count($ds_prod_list) - 1;
        ?>
        <?php foreach($ds_prod_list as $index => $spc):?>
            <?php if($index==$maxindex):?>
                <?php
                    $maxindex+=6;
                ?>
                <?php if($index==0):?>
                    <div class="row">
                <?php else:?>
                    <div class="row mt-2">
                <?php endif;?>
            <?php endif;?>
                <div class="col-2">
                    <div class="card" id="spid-<?= $spc['sp_id']?>" onclick="goProdDetail('<?= $spc['sp_id']?>')">
                        <?php if($spc['hsp_src']==''):?>
                            <img src="/kiddiirecords.com/assets/img/logo/default-no-img.jpg" class="card-img-top"
                                alt="">
                            <?php if($spc['km_tyle']!=0 || $spc['km_khac']!='Không có khuyến mãi đặc biệt'):?>
                                <img src="/kiddiirecords.com/assets/img/logo/sale-logo.png" class="salelogo1" />
                            <?php endif;?>
                        <?php else:?>
                            <img src="/kiddiirecords.com/assets/img/uploads_productimgs/<?= $spc['hsp_src']?>" class="card-img-top"
                                alt="">
                            <?php if($spc['km_tyle']!=0 || $spc['km_khac']!='Không có khuyến mãi đặc biệt'):?>
                                <img src="/kiddiirecords.com/assets/img/logo/sale-logo.png" class="salelogo1" />
                            <?php endif;?>
                        <?php endif;?>
                        <div class="card-body card-btext1 p-0">
                            <p class="card-text text-center text-overf-carou pt-1 pl-2 pr-2 mb-0">
                                <?= $spc['ns_ten']?> - <?= $spc['sp_ten']?>
                                <br>
                                <?= $spc['dd_ten']?>
                            </p>
                            <hr class="m-0" />
                            <p class="card-text text-center pdsprice mt-1">
                                <?php if($spc['km_tyle']!=0):?>
                                    <del><?= number_format($spc['sp_giagoc'])?>₫</del>
                                    <?= number_format($spc['sp_giagoc']-$spc['sp_giagoc']*($spc['km_tyle']/100.0))?>₫
                                <?php else:?>
                                    <?= number_format($spc['sp_giagoc'])?>₫
                                <?php endif;?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php if($index==($maxindex-1) && $index!=0):?>
                </div>
            <?php else:?>
                <?php if($index==$real_max_index):?>
                    </div>
                <?php endif;?>
            <?php endif;?>
        <?php endforeach; ?>

        <div class="row mt-2 flex-div ba">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
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