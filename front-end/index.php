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
        h5{
            border: 1px solid pink;
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
    <div class="container custom-container"> 

        <!-- CAMPAIGN & ANNOUNCEMENT for pc-->
        <div class="d-none d-xl-flex row text-center flex-div ana-bar pt-2 pb-2 mt-2 mb-2 mr-0 ml-0">
            <div class="col-xl-4 ana-bar-font">
                <i class="fa fa-money ana-bar-icon" aria-hidden="true"></i>
                MÃ GIẢM&nbsp;<span class="ana-bar-percent">20%</span>:
                <u>KIDDII20</u>
            </div>
            <div class="col-xl-4 ana-bar-middle-box ana-bar-font">
                <i class="fa fa-truck ana-bar-icon" aria-hidden="true"></i>
                DỊCH VỤ GIAO NHANH 2H
            </div>
            <div class="col-xl-4 ana-bar-font">
                <i class="fa fa-bolt ana-bar-icon" aria-hidden="true"></i>
                DEAL KHỦNG TỪ 23H
            </div>
        </div>

        <!-- CAROUSEL-->
        <div class="row">
            <div class="col-12 text-center">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/kiddiirecords.com/assets/img/caroucel/tliiasaw.jpg" class="d-block img-fluid" alt="mid night"
                                id="c-mn">
                        </div>
                        <div class="carousel-item">
                            <img src="/kiddiirecords.com/assets/img/caroucel/cctla-nct.jpg" class="d-block img-fluid"
                                alt="chỉ có thể là anh" id="c-cctla">
                        </div>
                        <div class="carousel-item">
                            <img src="/kiddiirecords.com/assets/img/caroucel/invu-taeyeon.jpg" class="d-block img-fluid" alt="invu"
                                id="c-invu">
                        </div>
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
            </div>
        </div>

        <!-- CAMPAIGN & ANNOUNCEMENT for mobile/tablet-->
        <div id="wrapper" class="mt-3">
            <div id="scroller">
                <ul>
                    <li class="mr-3 pt-1">
                        <span class="ana-bar-font">
                            <i class="fa fa-money ana-bar-icon" aria-hidden="true"></i>
                            <br>
                            GIẢM&nbsp;<span class="ana-bar-percent">20%</span>:
                            <u>KIDDII20</u>
                        </span>
                    </li>
                    <li class="mr-3 pt-1">
                        <span class="ana-bar-font">
                            <i class="fa fa-truck ana-bar-icon" aria-hidden="true"></i>
                            <br>
                            DV GIAO NHANH 2H
                        </span>
                    </li>
                    <li class="mr-3 pt-1">
                        <span class="ana-bar-font">
                            <i class="fa fa-bolt ana-bar-icon" aria-hidden="true"></i>
                            <br>
                            DEAL KHỦNG TỪ 23H
                        </span>
                    </li>
                    <li class="mr-3 pt-1">
                        <span class="ana-bar-font">
                        <i class="fa fa-bell ana-bar-icon" aria-hidden="true"></i>
                            <br>
                            NHIỀU ƯU ĐÃI KHÁC
                        </span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- TRENDING -->

        <!-- trending bar for pc-->
        <div class="row mt-2 tr-bar-pc">
            <div class="col-6 hlinep flex-div-nalign-l">
                <i class="fa fa-line-chart" aria-hidden="true"></i>&nbsp;TRENDS / SẢN PHẨM XU HƯỚNG
            </div>
            <div class="col-6 hlinep flex-div-nalign-r">
                <button type="button" class="buttonca1">Xem thêm</button>
                &nbsp;&nbsp;
                <button class="buttonca2" data-target="#carouselExampleControls" data-slide="prev"><i
                        class="fa fa-chevron-left" aria-hidden="true"></i></button>
                &nbsp;&nbsp;
                <button class="buttonca2" data-target="#carouselExampleControls" data-slide="next"><i
                        class="fa fa-chevron-right" aria-hidden="true"></i></button>
            </div>
        </div>
        <!-- trending products for pc-->
        <div class="row mt-2 tr-prod-pc">
            <div class="col-12">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <!-- Chuan bi du lieu trending 1-->
                        <?php
                            $sql_carousel_trending1="SELECT sp.sp_id,sp.sp_ten,sp.sp_giagoc,sp.sp_trending,ns.ns_ten,dd.dd_ten,km.km_tyle,km.km_khac,hsp.hsp_src
                            FROM sanpham sp LEFT JOIN nghesi ns ON sp.ns_id=ns.ns_id
                                LEFT JOIN hinhsanpham hsp ON sp.sp_id=hsp.sp_id
                                LEFT JOIN dinhdang dd ON sp.dd_id=dd.dd_id
                                LEFT JOIN khuyenmai km ON sp.km_id=km.km_id
                            WHERE ((hsp.hsp_src IS NOT NULL AND hsp.hsp_isfontcover = 1) OR (hsp.hsp_src IS NULL)) AND sp_trending=1
                            ORDER BY sp_id desc
                            LIMIT 12";
                            $result_carousel_trending1=mysqli_query($conn,$sql_carousel_trending1);
                            $ds_carousel_trending1 = [];
                            while($row=mysqli_fetch_array($result_carousel_trending1,MYSQLI_ASSOC))
                            {
                                $ds_carousel_trending1[] = array(
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
                        <!-- trending-1 -->
                        <div class="carousel-item active" data-interval="300000">
                            <div class="row">
                                <?php foreach($ds_carousel_trending1 as $index => $spc):?>
                                    <?php if($index<=5):?>
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
                                    <?php endif;?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        
                        <!-- Chuan bi du lieu trending 2-->
                        <?php
                            $sql_carousel_trending1="SELECT sp.sp_id,sp.sp_ten,sp.sp_giagoc,sp.sp_trending,ns.ns_ten,dd.dd_ten,km.km_tyle,km.km_khac,hsp.hsp_src
                            FROM sanpham sp LEFT JOIN nghesi ns ON sp.ns_id=ns.ns_id
                                LEFT JOIN hinhsanpham hsp ON sp.sp_id=hsp.sp_id
                                LEFT JOIN dinhdang dd ON sp.dd_id=dd.dd_id
                                LEFT JOIN khuyenmai km ON sp.km_id=km.km_id
                            WHERE ((hsp.hsp_src IS NOT NULL AND hsp.hsp_isfontcover = 1) OR (hsp.hsp_src IS NULL)) AND sp_trending=1
                            ORDER BY sp_id desc
                            LIMIT 12";
                            $result_carousel_trending1=mysqli_query($conn,$sql_carousel_trending1);
                            $ds_carousel_trending1 = [];
                            while($row=mysqli_fetch_array($result_carousel_trending1,MYSQLI_ASSOC))
                            {
                                $ds_carousel_trending1[] = array(
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
                        <!-- trending-2 -->
                        <div class="carousel-item" data-interval="300000">
                            <div class="row">
                                <?php foreach($ds_carousel_trending1 as $index => $spc):?>
                                    <?php if($index>5):?>
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
                                                        <br>
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
                                    <?php endif;?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- trending bar for mobile/tablet-->
        <div class="row mt-2 tr-bar-mobi">
            <div class="col-6 hlinep flex-div-nalign-l">
                <i class="fa fa-line-chart" aria-hidden="true"></i>&nbsp;TRENDS / SẢN PHẨM XU HƯỚNG
            </div>
            <div class="col-6 hlinep flex-div-nalign-r">
                <button type="button" class="buttonca1">Xem thêm</button>
                &nbsp;&nbsp;
                <button class="buttonca2" data-target="#carouselExampleControls_mobile1" data-slide="prev"><i
                        class="fa fa-chevron-left" aria-hidden="true"></i></button>
                &nbsp;&nbsp;
                <button class="buttonca2" data-target="#carouselExampleControls_mobile1" data-slide="next"><i
                        class="fa fa-chevron-right" aria-hidden="true"></i></button>
            </div>
        </div>
        <!-- trending products for mobile/tablet-->
        <div class="row mt-2 tr-prod-mobi">
            <div class="col-12">
                <div id="carouselExampleControls_mobile1" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <!-- Chuan bi du lieu mobile trending 1-->
                        <?php
                            $sql_carousel_trending1="SELECT sp.sp_id,sp.sp_ten,sp.sp_giagoc,sp.sp_trending,ns.ns_ten,dd.dd_ten,km.km_tyle,km.km_khac,hsp.hsp_src
                            FROM sanpham sp LEFT JOIN nghesi ns ON sp.ns_id=ns.ns_id
                                LEFT JOIN hinhsanpham hsp ON sp.sp_id=hsp.sp_id
                                LEFT JOIN dinhdang dd ON sp.dd_id=dd.dd_id
                                LEFT JOIN khuyenmai km ON sp.km_id=km.km_id
                            WHERE ((hsp.hsp_src IS NOT NULL AND hsp.hsp_isfontcover = 1) OR (hsp.hsp_src IS NULL)) AND sp_trending=1
                            ORDER BY sp_id desc
                            LIMIT 4";
                            $result_carousel_trending1=mysqli_query($conn,$sql_carousel_trending1);
                            $ds_carousel_trending1 = [];
                            while($row=mysqli_fetch_array($result_carousel_trending1,MYSQLI_ASSOC))
                            {
                                $ds_carousel_trending1[] = array(
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
                        <!-- mobile trending-1 -->
                        <div class="carousel-item active" data-interval="300000">
                            <div class="row">
                                <?php foreach($ds_carousel_trending1 as $index => $spc):?>
                                    <?php if($index<=1):?>
                                        <div class="col-6">
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
                                    <?php endif;?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        
                        <!-- Chuan bi du lieu mobile trending 2-->
                        <?php
                            $sql_carousel_trending1="SELECT sp.sp_id,sp.sp_ten,sp.sp_giagoc,sp.sp_trending,ns.ns_ten,dd.dd_ten,km.km_tyle,km.km_khac,hsp.hsp_src
                            FROM sanpham sp LEFT JOIN nghesi ns ON sp.ns_id=ns.ns_id
                                LEFT JOIN hinhsanpham hsp ON sp.sp_id=hsp.sp_id
                                LEFT JOIN dinhdang dd ON sp.dd_id=dd.dd_id
                                LEFT JOIN khuyenmai km ON sp.km_id=km.km_id
                            WHERE ((hsp.hsp_src IS NOT NULL AND hsp.hsp_isfontcover = 1) OR (hsp.hsp_src IS NULL)) AND sp_trending=1
                            ORDER BY sp_id desc
                            LIMIT 4";
                            $result_carousel_trending1=mysqli_query($conn,$sql_carousel_trending1);
                            $ds_carousel_trending1 = [];
                            while($row=mysqli_fetch_array($result_carousel_trending1,MYSQLI_ASSOC))
                            {
                                $ds_carousel_trending1[] = array(
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
                        <!-- mobile trending-1 -->
                        <div class="carousel-item" data-interval="300000">
                            <div class="row">
                                <?php foreach($ds_carousel_trending1 as $index => $spc):?>
                                    <?php if($index>1):?>
                                        <div class="col-6">
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
                                    <?php endif;?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- NEW ARRIVALS -->

        <!-- new arrivals bar for pc-->
        <div class="row mt-2 tr-bar-pc">
            <div class="col-6 hlinep flex-div-nalign-l">
                <i class="fa fa-star-o" aria-hidden="true"></i>&nbsp;NEW ARRIVALS/ SẢN PHẨM MỚI
            </div>
            <div class="col-6 hlinep flex-div-nalign-r">
                <button type="button" class="buttonca1">Xem thêm</button>
                &nbsp;&nbsp;
                <button class="buttonca2" data-target="#carouselExampleControls2" data-slide="prev"><i
                        class="fa fa-chevron-left" aria-hidden="true"></i></button>
                &nbsp;&nbsp;
                <button class="buttonca2" data-target="#carouselExampleControls2" data-slide="next"><i
                        class="fa fa-chevron-right" aria-hidden="true"></i></button>
            </div>
        </div>
        <!-- new arrivals products for pc-->
        <div class="row mt-2 tr-prod-pc">
            <div class="col-12">
                <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <!-- Chuan bi du lieu new arrivals products 1-->
                        <?php
                            $sql_carousel_trending1="SELECT sp.sp_id,sp.sp_ten,sp.sp_giagoc,sp.sp_trending,ns.ns_ten,dd.dd_ten,km.km_tyle,km.km_khac,hsp.hsp_src
                            FROM sanpham sp LEFT JOIN nghesi ns ON sp.ns_id=ns.ns_id
                                LEFT JOIN hinhsanpham hsp ON sp.sp_id=hsp.sp_id
                                LEFT JOIN dinhdang dd ON sp.dd_id=dd.dd_id
                                LEFT JOIN khuyenmai km ON sp.km_id=km.km_id
                            WHERE (hsp.hsp_src IS NOT NULL AND hsp.hsp_isfontcover = 1) OR (hsp.hsp_src IS NULL)
                            ORDER BY sp.sp_id desc
                            LIMIT 12";
                            $result_carousel_trending1=mysqli_query($conn,$sql_carousel_trending1);
                            $ds_carousel_trending1 = [];
                            while($row=mysqli_fetch_array($result_carousel_trending1,MYSQLI_ASSOC))
                            {
                                $ds_carousel_trending1[] = array(
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
                        <!-- New arrivals products-1 -->
                        <div class="carousel-item active" data-interval="300000">
                            <div class="row">
                                <?php foreach($ds_carousel_trending1 as $index => $spc):?>
                                    <?php if($index<=5):?>
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
                                    <?php endif;?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        
                        <!-- Chuan bi du lieu new arrivals products 2-->
                        <?php
                            $sql_carousel_trending1="SELECT sp.sp_id,sp.sp_ten,sp.sp_giagoc,sp.sp_trending,ns.ns_ten,dd.dd_ten,km.km_tyle,km.km_khac,hsp.hsp_src
                            FROM sanpham sp LEFT JOIN nghesi ns ON sp.ns_id=ns.ns_id
                                LEFT JOIN hinhsanpham hsp ON sp.sp_id=hsp.sp_id
                                LEFT JOIN dinhdang dd ON sp.dd_id=dd.dd_id
                                LEFT JOIN khuyenmai km ON sp.km_id=km.km_id
                            WHERE (hsp.hsp_src IS NOT NULL AND hsp.hsp_isfontcover = 1) OR (hsp.hsp_src IS NULL)
                            ORDER BY sp.sp_id desc
                            LIMIT 12";
                            $result_carousel_trending1=mysqli_query($conn,$sql_carousel_trending1);
                            $ds_carousel_trending1 = [];
                            while($row=mysqli_fetch_array($result_carousel_trending1,MYSQLI_ASSOC))
                            {
                                $ds_carousel_trending1[] = array(
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
                        <!-- New arrivals products-2 -->
                        <div class="carousel-item" data-interval="300000">
                            <div class="row">
                                <?php foreach($ds_carousel_trending1 as $index => $spc):?>
                                    <?php if($index>5):?>
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
                                                        <br>
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
                                    <?php endif;?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- new arrivals bar for mobile/tablet-->
        <div class="row mt-2 tr-bar-mobi">
            <div class="col-6 hlinep flex-div-nalign-l">
                <i class="fa fa-star-o" aria-hidden="true"></i>&nbsp;NEW ARRIVALS/ SẢN PHẨM MỚI
            </div>
            <div class="col-6 hlinep flex-div-nalign-r">
                <button type="button" class="buttonca1">Xem thêm</button>
                &nbsp;&nbsp;
                <button class="buttonca2" data-target="#carouselExampleControls_mobile2" data-slide="prev"><i
                        class="fa fa-chevron-left" aria-hidden="true"></i></button>
                &nbsp;&nbsp;
                <button class="buttonca2" data-target="#carouselExampleControls_mobile2" data-slide="next"><i
                        class="fa fa-chevron-right" aria-hidden="true"></i></button>
            </div>
        </div>
        <!-- new arrivals products for mobile/tablet-->
        <div class="row mt-2 tr-prod-mobi">
            <div class="col-12">
                <div id="carouselExampleControls_mobile2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <!-- Chuan bi du lieu mobile - new arrivals products 1-->
                        <?php
                            $sql_carousel_trending1="SELECT sp.sp_id,sp.sp_ten,sp.sp_giagoc,sp.sp_trending,ns.ns_ten,dd.dd_ten,km.km_tyle,km.km_khac,hsp.hsp_src
                            FROM sanpham sp LEFT JOIN nghesi ns ON sp.ns_id=ns.ns_id
                                LEFT JOIN hinhsanpham hsp ON sp.sp_id=hsp.sp_id
                                LEFT JOIN dinhdang dd ON sp.dd_id=dd.dd_id
                                LEFT JOIN khuyenmai km ON sp.km_id=km.km_id
                            WHERE (hsp.hsp_src IS NOT NULL AND hsp.hsp_isfontcover = 1) OR (hsp.hsp_src IS NULL)
                            ORDER BY sp.sp_id desc
                            LIMIT 4";
                            $result_carousel_trending1=mysqli_query($conn,$sql_carousel_trending1);
                            $ds_carousel_trending1 = [];
                            while($row=mysqli_fetch_array($result_carousel_trending1,MYSQLI_ASSOC))
                            {
                                $ds_carousel_trending1[] = array(
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
                        <!-- Mobie - New arrivals products-1 -->
                        <div class="carousel-item active" data-interval="300000">
                            <div class="row">
                                <?php foreach($ds_carousel_trending1 as $index => $spc):?>
                                    <?php if($index<=1):?>
                                        <div class="col-6">
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
                                    <?php endif;?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        
                        <!-- Chuan bi du lieu mobile - new arrivals products 2-->
                        <?php
                            $sql_carousel_trending1="SELECT sp.sp_id,sp.sp_ten,sp.sp_giagoc,sp.sp_trending,ns.ns_ten,dd.dd_ten,km.km_tyle,km.km_khac,hsp.hsp_src
                            FROM sanpham sp LEFT JOIN nghesi ns ON sp.ns_id=ns.ns_id
                                LEFT JOIN hinhsanpham hsp ON sp.sp_id=hsp.sp_id
                                LEFT JOIN dinhdang dd ON sp.dd_id=dd.dd_id
                                LEFT JOIN khuyenmai km ON sp.km_id=km.km_id
                            WHERE (hsp.hsp_src IS NOT NULL AND hsp.hsp_isfontcover = 1) OR (hsp.hsp_src IS NULL)
                            ORDER BY sp.sp_id desc
                            LIMIT 4";
                            $result_carousel_trending1=mysqli_query($conn,$sql_carousel_trending1);
                            $ds_carousel_trending1 = [];
                            while($row=mysqli_fetch_array($result_carousel_trending1,MYSQLI_ASSOC))
                            {
                                $ds_carousel_trending1[] = array(
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
                        <!-- Mobile - New arrivals products-2 -->
                        <div class="carousel-item" data-interval="300000">
                            <div class="row">
                                <?php foreach($ds_carousel_trending1 as $index => $spc):?>
                                    <?php if($index>1):?>
                                        <div class="col-6">
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
                                                        <br>
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
                                    <?php endif;?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SALE -->

        <!-- sale bar for pc-->
        <div class="row mt-2 tr-bar-pc">
            <div class="col-6 hlinep flex-div-nalign-l">
                <i class="fa fa-diamond" aria-hidden="true"></i>&nbsp;SALES / GIÁ ƯU ĐÃI
            </div>
            <div class="col-6 hlinep flex-div-nalign-r">
                <button type="button" class="buttonca1">Xem thêm</button>
                &nbsp;&nbsp;
                <button class="buttonca2" data-target="#carouselExampleControls3" data-slide="prev"><i
                        class="fa fa-chevron-left" aria-hidden="true"></i></button>
                &nbsp;&nbsp;
                <button class="buttonca2" data-target="#carouselExampleControls3" data-slide="next"><i
                        class="fa fa-chevron-right" aria-hidden="true"></i></button>
            </div>
        </div>
        <!-- sale products for pc-->
        <div class="row mt-2 tr-prod-pc">
            <div class="col-12">
                <div id="carouselExampleControls3" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <!-- Chuan bi du lieu sale products 1-->
                        <?php
                            $sql_carousel_trending1="SELECT sp.sp_id,sp.sp_ten,sp.sp_giagoc,sp.sp_trending,ns.ns_ten,dd.dd_ten,km.km_tyle,km.km_khac,hsp.hsp_src
                            FROM sanpham sp LEFT JOIN nghesi ns ON sp.ns_id=ns.ns_id
                                LEFT JOIN hinhsanpham hsp ON sp.sp_id=hsp.sp_id
                                LEFT JOIN dinhdang dd ON sp.dd_id=dd.dd_id
                                LEFT JOIN khuyenmai km ON sp.km_id=km.km_id
                            WHERE ((hsp.hsp_src IS NOT NULL AND hsp.hsp_isfontcover = 1) OR (hsp.hsp_src IS NULL)) AND (sp.km_id IS NOT NULL AND sp.km_id!=1)
                            ORDER BY sp.sp_id desc
                            LIMIT 12";
                            $result_carousel_trending1=mysqli_query($conn,$sql_carousel_trending1);
                            $ds_carousel_trending1 = [];
                            while($row=mysqli_fetch_array($result_carousel_trending1,MYSQLI_ASSOC))
                            {
                                $ds_carousel_salepc1[] = array(
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
                        <!-- sale products-1 -->
                        <div class="carousel-item active" data-interval="300000">
                            <div class="row">
                                <?php foreach($ds_carousel_salepc1 as $index => $spc):?>
                                    <?php if($index<=5):?>
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
                                    <?php endif;?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        
                        <!-- Chuan bi du lieu sale products 2-->
                        <?php
                            $sql_carousel_trending1="SELECT sp.sp_id,sp.sp_ten,sp.sp_giagoc,sp.sp_trending,ns.ns_ten,dd.dd_ten,km.km_tyle,km.km_khac,hsp.hsp_src
                            FROM sanpham sp LEFT JOIN nghesi ns ON sp.ns_id=ns.ns_id
                                LEFT JOIN hinhsanpham hsp ON sp.sp_id=hsp.sp_id
                                LEFT JOIN dinhdang dd ON sp.dd_id=dd.dd_id
                                LEFT JOIN khuyenmai km ON sp.km_id=km.km_id
                            WHERE ((hsp.hsp_src IS NOT NULL AND hsp.hsp_isfontcover = 1) OR (hsp.hsp_src IS NULL)) AND (sp.km_id IS NOT NULL AND sp.km_id!=1)
                            ORDER BY sp.sp_id desc
                            LIMIT 12";
                            $result_carousel_trending1=mysqli_query($conn,$sql_carousel_trending1);
                            $ds_carousel_salepc2 = [];
                            while($row=mysqli_fetch_array($result_carousel_trending1,MYSQLI_ASSOC))
                            {
                                $ds_carousel_salepc2[] = array(
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
                        <!-- sale products products-2 -->
                        <div class="carousel-item" data-interval="300000">
                            <div class="row">
                                <?php foreach($ds_carousel_salepc2 as $index => $spc):?>
                                    <?php if($index>5):?>
                                        <div class="col-2">
                                            <div class="card" id="spid-<?= $spc['sp_id']?>" onclick="goProdDetail('<?= $spc['sp_id']?>')">
                                                <?php if($spc['hsp_src']==''):?>
                                                    <img src="/kiddiirecords.com/assets/img/logo/default-no-img.jpg" class="card-img-top"
                                                        alt="">
                                                    <?php if($spc['km_tyle']!=0 || $spc['km_khac']!='Không có khuyến mãi đặc biệt'):?>
                                                        <img src="/kiddiirecords.com/assets/img/logo/sale-logo.png" class="salelogo1" />
                                                    <?php endif;?>
                                                        <img src="/kiddiirecords.com/assets/img/logo/sale-logo.png" class="salelogo1" />
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
                                    <?php endif;?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- sale bar for mobile/tablet-->
        <div class="row mt-2 tr-bar-mobi">
            <div class="col-6 hlinep flex-div-nalign-l">
                <i class="fa fa-diamond" aria-hidden="true"></i>&nbsp;SALES / GIÁ ƯU ĐÃI
            </div>
            <div class="col-6 hlinep flex-div-nalign-r">
                <button type="button" class="buttonca1">Xem thêm</button>
                &nbsp;&nbsp;
                <button class="buttonca2" data-target="#carouselExampleControls_mobile3" data-slide="prev"><i
                        class="fa fa-chevron-left" aria-hidden="true"></i></button>
                &nbsp;&nbsp;
                <button class="buttonca2" data-target="#carouselExampleControls_mobile3" data-slide="next"><i
                        class="fa fa-chevron-right" aria-hidden="true"></i></button>
            </div>
        </div>
        <!-- sale products for mobile/tablet-->
        <div class="row mt-2 tr-prod-mobi">
            <div class="col-12">
                <div id="carouselExampleControls_mobile3" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <!-- Chuan bi du lieu sale moblie 1-->
                        <?php
                            $sql_carousel_trending1="SELECT sp.sp_id,sp.sp_ten,sp.sp_giagoc,sp.sp_trending,ns.ns_ten,dd.dd_ten,km.km_tyle,km.km_khac,hsp.hsp_src
                            FROM sanpham sp LEFT JOIN nghesi ns ON sp.ns_id=ns.ns_id
                                LEFT JOIN hinhsanpham hsp ON sp.sp_id=hsp.sp_id
                                LEFT JOIN dinhdang dd ON sp.dd_id=dd.dd_id
                                LEFT JOIN khuyenmai km ON sp.km_id=km.km_id
                            WHERE ((hsp.hsp_src IS NOT NULL AND hsp.hsp_isfontcover = 1) OR (hsp.hsp_src IS NULL)) AND (sp.km_id IS NOT NULL AND sp.km_id!=1)
                            ORDER BY sp.sp_id desc
                            LIMIT 4";
                            $result_carousel_trending1=mysqli_query($conn,$sql_carousel_trending1);
                            $ds_carousel_trending1 = [];
                            while($row=mysqli_fetch_array($result_carousel_trending1,MYSQLI_ASSOC))
                            {
                                $ds_carousel_sale1[] = array(
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
                        <!-- sale moblie-1 -->
                        <div class="carousel-item active" data-interval="300000">
                            <div class="row">
                                <?php foreach($ds_carousel_sale1 as $index => $spc):?>
                                    <?php if($index<=1):?>
                                        <div class="col-6">
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
                                    <?php endif;?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        
                        <!-- Chuan bi du lieu sale mobile 2-->
                        <?php
                            $sql_carousel_trending1="SELECT sp.sp_id,sp.sp_ten,sp.sp_giagoc,sp.sp_trending,ns.ns_ten,dd.dd_ten,km.km_tyle,km.km_khac,hsp.hsp_src
                            FROM sanpham sp LEFT JOIN nghesi ns ON sp.ns_id=ns.ns_id
                                LEFT JOIN hinhsanpham hsp ON sp.sp_id=hsp.sp_id
                                LEFT JOIN dinhdang dd ON sp.dd_id=dd.dd_id
                                LEFT JOIN khuyenmai km ON sp.km_id=km.km_id
                            WHERE ((hsp.hsp_src IS NOT NULL AND hsp.hsp_isfontcover = 1) OR (hsp.hsp_src IS NULL)) AND (sp.km_id IS NOT NULL AND sp.km_id!=1)
                            ORDER BY sp.sp_id desc
                            LIMIT 4";
                            $result_carousel_trending1=mysqli_query($conn,$sql_carousel_trending1);
                            $ds_carousel_trending1 = [];
                            while($row=mysqli_fetch_array($result_carousel_trending1,MYSQLI_ASSOC))
                            {
                                $ds_carousel_sale2[] = array(
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
                        <!-- sale mobile-2 -->
                        <div class="carousel-item" data-interval="300000">
                            <div class="row">
                                <?php foreach($ds_carousel_sale2 as $index => $spc):?>
                                    <?php if($index>1):?>
                                        <div class="col-6">
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
                                    <?php endif;?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- EVENT -->

        <!-- event bar for pc-->
        <div class="row mt-2 tr-bar-pc">
            <div class="col-6 hlinep flex-div-nalign-l">
                <i class="fa fa-newspaper-o" aria-hidden="true"></i>&nbsp;EVENTS / SỰ KIỆN
            </div>
            <div class="col-6 hlinep flex-div-nalign-r">
                <button type="button" class="buttonca1">Xem thêm</button>
                &nbsp;&nbsp;
                <button class="buttonca2" data-target="#carouselExampleControls4" data-slide="prev"><i
                        class="fa fa-chevron-left" aria-hidden="true"></i></button>
                &nbsp;&nbsp;
                <button class="buttonca2" data-target="#carouselExampleControls4" data-slide="next"><i
                        class="fa fa-chevron-right" aria-hidden="true"></i></button>
            </div>
        </div>
        <!-- event news for pc-->
        <div class="row mt-2 tr-prod-pc">
            <div class="col-12">
                <div id="carouselExampleControls4" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <!-- Chuan bi du lieu event 1-->
                        <?php
                            $sql_event="SELECT * FROM sukien
                            ORDER BY sk_id desc
                            LIMIT 6";
                            $result_event=mysqli_query($conn,$sql_event);
                            $ds_event = [];
                            while($row=mysqli_fetch_array($result_event,MYSQLI_ASSOC))
                            {
                                $ds_event[] = array(
                                    'sk_id' => $row['sk_id'],
                                    'sk_noidung' => $row['sk_noidung'],
                                    'sk_tacgia' => $row['sk_tacgia'],
                                    'sk_ngay' => $row['sk_ngay'],
                                    'sk_duongdan' => $row['sk_duongdan'],
                                    'sk_hinhanh' => $row['sk_hinhanh']
                                );
                            }
                        ?>
                        <!-- event 1 -->
                        <div class="carousel-item active" data-interval="300000">
                            <div class="row">
                                <?php foreach($ds_event as $index => $ev):?>
                                    <div class="col-4">
                                        <?php if($index<=2):?>
                                            <div class="card" id="event-<?= $ev['sk_id']?>" onclick="goEventDetail('<?= $ev['sk_duongdan']?>')">
                                                <img src="/kiddiirecords.com/assets/img/uploads_events/<?= $ev['sk_hinhanh']?>" class="card-img-top" alt="...">
                                                <div class="card-body card-btext1 text-center p-0">
                                                    <?= $ev['sk_noidung']?>
                                                    <hr class="hrmenu" />
                                                    <?= $ev['sk_tacgia']?> - <?= $ev['sk_ngay']?>
                                                </div>
                                            </div>
                                        <?php endif;?>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        
                        <!-- Chuan bi du lieu event 2-->
                        <?php
                            $sql_event="SELECT * FROM sukien
                            ORDER BY sk_id desc
                            LIMIT 6";
                            $result_event=mysqli_query($conn,$sql_event);
                            $ds_event = [];
                            while($row=mysqli_fetch_array($result_event,MYSQLI_ASSOC))
                            {
                                $ds_event[] = array(
                                    'sk_id' => $row['sk_id'],
                                    'sk_noidung' => $row['sk_noidung'],
                                    'sk_tacgia' => $row['sk_tacgia'],
                                    'sk_ngay' => $row['sk_ngay'],
                                    'sk_duongdan' => $row['sk_duongdan'],
                                    'sk_hinhanh' => $row['sk_hinhanh']
                                );
                            }
                        ?>
                        <!-- event 2 -->
                        <div class="carousel-item" data-interval="300000">
                            <div class="row">
                                <?php foreach($ds_event as $index => $ev):?>
                                    <div class="col-4">
                                        <?php if($index>2):?>
                                            <div class="card" id="event-<?= $ev['sk_id']?>" onclick="goEventDetail('<?= $ev['sk_duongdan']?>')">
                                                <img src="/kiddiirecords.com/assets/img/uploads_events/<?= $ev['sk_hinhanh']?>" class="card-img-top" alt="...">
                                                <div class="card-body card-btext1 text-center p-0">
                                                    <?= $ev['sk_noidung']?>
                                                    <hr class="hrmenu" />
                                                    <?= $ev['sk_tacgia']?> - <?= $ev['sk_ngay']?>
                                                </div>
                                            </div>
                                        <?php endif;?>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- event bar for mobile/tablet-->
        <div class="row mt-2 tr-bar-mobi">
            <div class="col-6 hlinep flex-div-nalign-l">
                <i class="fa fa-newspaper-o" aria-hidden="true"></i>&nbsp;EVENTS / SỰ KIỆN
            </div>
            <div class="col-6 hlinep flex-div-nalign-r">
                <button type="button" class="buttonca1">Xem thêm</button>
                &nbsp;&nbsp;
                <button class="buttonca2" data-target="#carouselExampleControls_mobile4" data-slide="prev"><i
                        class="fa fa-chevron-left" aria-hidden="true"></i></button>
                &nbsp;&nbsp;
                <button class="buttonca2" data-target="#carouselExampleControls_mobile4" data-slide="next"><i
                        class="fa fa-chevron-right" aria-hidden="true"></i></button>
            </div>
        </div>
        <!-- event news for mobile/tablet-->
        <div class="row mt-2 tr-prod-mobi">
            <div class="col-12">
                <div id="carouselExampleControls_mobile4" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <!-- Chuan bi du lieu event 1-->
                        <?php
                            $sql_event="SELECT * FROM sukien
                            ORDER BY sk_id desc
                            LIMIT 2";
                            $result_event=mysqli_query($conn,$sql_event);
                            $ds_event = [];
                            while($row=mysqli_fetch_array($result_event,MYSQLI_ASSOC))
                            {
                                $ds_eventmobi[] = array(
                                    'sk_id' => $row['sk_id'],
                                    'sk_noidung' => $row['sk_noidung'],
                                    'sk_tacgia' => $row['sk_tacgia'],
                                    'sk_ngay' => $row['sk_ngay'],
                                    'sk_duongdan' => $row['sk_duongdan'],
                                    'sk_hinhanh' => $row['sk_hinhanh']
                                );
                            }
                        ?>
                        <!-- event 1 -->
                        <div class="carousel-item active" data-interval="300000">
                            <div class="row">
                                <?php foreach($ds_eventmobi as $index => $ev):?>
                                    <div class="col-12">
                                        <?php if($index<=0):?>
                                            <div class="card" id="event-<?= $ev['sk_id']?>" onclick="goEventDetail('<?= $ev['sk_duongdan']?>')">
                                                <img src="/kiddiirecords.com/assets/img/uploads_events/<?= $ev['sk_hinhanh']?>" class="card-img-top" alt="...">
                                                <div class="card-body card-btext1 text-center p-0">
                                                    <?= $ev['sk_noidung']?>
                                                    <hr class="hrmenu" />
                                                    <?= $ev['sk_tacgia']?> - <?= $ev['sk_ngay']?>
                                                </div>
                                            </div>
                                        <?php endif;?>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <!-- Chuan bi du lieu event 2-->
                        <?php
                            $sql_event="SELECT * FROM sukien
                            ORDER BY sk_id desc
                            LIMIT 2";
                            $result_event=mysqli_query($conn,$sql_event);
                            $ds_event = [];
                            while($row=mysqli_fetch_array($result_event,MYSQLI_ASSOC))
                            {
                                $ds_eventmobi2[] = array(
                                    'sk_id' => $row['sk_id'],
                                    'sk_noidung' => $row['sk_noidung'],
                                    'sk_tacgia' => $row['sk_tacgia'],
                                    'sk_ngay' => $row['sk_ngay'],
                                    'sk_duongdan' => $row['sk_duongdan'],
                                    'sk_hinhanh' => $row['sk_hinhanh']
                                );
                            }
                        ?>
                        <!-- event 1 -->
                        <div class="carousel-item" data-interval="300000">
                            <div class="row">
                                <?php foreach($ds_eventmobi2 as $index => $ev):?>
                                    <div class="col-12">
                                        <?php if($index>0):?>
                                            <div class="card" id="event-<?= $ev['sk_id']?>" onclick="goEventDetail('<?= $ev['sk_duongdan']?>')">
                                                <img src="/kiddiirecords.com/assets/img/uploads_events/<?= $ev['sk_hinhanh']?>" class="card-img-top" alt="...">
                                                <div class="card-body card-btext1 text-center p-0">
                                                    <?= $ev['sk_noidung']?>
                                                    <hr class="hrmenu" />
                                                    <?= $ev['sk_tacgia']?> - <?= $ev['sk_ngay']?>
                                                </div>
                                            </div>
                                        <?php endif;?>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
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
</body>
</html>