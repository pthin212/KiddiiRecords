    <!-- start session -->
    <?php
        session_start();
    ?>

    <!-- ibar & logo-menu-select-cart -->
    <div class="ibar-background">
        <div class="container custom-container">
            <!-- email-hotline -->
            <div class="row ibar">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 left-ibar-zone pl-5">
                    Miễn phí vận chuyển COD cho tất cả đơn hàng - HOTLINE: 0964.418.010
                </div>
                <div class="col-xl-6 right-ibar-zone pr-5">
                    <i class="fa fa-envelope" aria-hidden="true"></i> Email: thinhduong2123@gmail.com&nbsp;&nbsp;
                    <i class="fa fa-phone" aria-hidden="true"></i> Hotline: 0964.418.010
                </div>
            </div>
        </div>
    </div>
    
    <div class="container custom-container">
        <!-- brandbar -->
        <div class="row lmsc">
            <!-- xl breakpoint -->
            <!-- logo-->
            <div class="xl-brandbar col-xl-3 flex-div text-center" id="mainlogo" onclick="goIndex()">
                <img src="/kiddiirecords.com/assets/img/logo/brand-logo-2.png" class="logo01 img-fluid">
            </div>
            
            <!-- search & menu -->
            <div class="xl-brandbar col-xl-6">
                <!-- search -->
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="input-group">
                            <input type="text" class="form-control s1" placeholder="Tìm kiếm sản phẩm..."
                                aria-label="Recipient's username" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-dark s1 find-button-bg" type="button" id="button-addon2"><i class="fa fa-search"
                                        aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- menu -->
                <div class="row mt-1">
                    <div class="col-12">
                        <ul class="menulv1 m-0 p-0">
                            <li><a href="/kiddiirecords.com/front-end/index.php">TRANG CHỦ</a></li>
                            <li><a href="/kiddiirecords.com/front-end/prod-list.php?dd_id=0">SẢN PHẨM <i class="fa fa-angle-down"
                                        aria-hidden="true"></i></a>
                                <ul class="menulv2">
                                    <li><a href="/kiddiirecords.com/front-end/prod-list.php?dd_id=1">CD - Đĩa CD</a>
                                        <hr class="hrmenu" />
                                    </li>
                                    <li><a href="/kiddiirecords.com/front-end/prod-list.php?dd_id=2">Vinyl - Đĩa than</a>
                                        <hr class="hrmenu" />
                                    </li>
                                    <li><a href="/kiddiirecords.com/front-end/prod-list.php?dd_id=3">Cassette - Băng từ</a>
                                        <hr class="hrmenu" />
                                    </li>
                                    <li><a href="/kiddiirecords.com/front-end/prod-list.php?dd_id=4">Other publication - Khác</a>
                                        <hr class="hrmenu" />
                                    </li>
                                </ul>
                            </li>
                            <li><a href="/kiddiirecords.com/front-end/error.php">DỊCH VỤ <i class="fa fa-angle-down"
                                        aria-hidden="true"></i></a>
                                <ul class="menulv2">
                                    <li><a href="/kiddiirecords.com/front-end/error.php">Thiết kế album</a>
                                        <hr class="hrmenu" />
                                    </li>
                                    <li><a href="/kiddiirecords.com/front-end/error.php">Thiết kế EP</a>
                                        <hr class="hrmenu" />
                                    </li>
                                    <li><a href="/kiddiirecords.com/front-end/error.php">Bản quyền âm nhạc</a>
                                        <hr class="hrmenu" />
                                    </li>
                                </ul>
                            </li>
                            <li><a href="/kiddiirecords.com/front-end/error.php">ĐỘC QUYỀN <i class="fa fa-angle-down"
                                        aria-hidden="true"></i></a>
                                <ul class="menulv2">
                                    <li><a href="/kiddiirecords.com/front-end/error.php">SUICIDE - NEW ALBUM - BY KIDDII RECORDS</a>
                                        <hr class="hrmenu" />
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- register & cart -->
            <div class="xl-brandbar col-xl-3 text-center flex-div">
                <?php if(isset($_SESSION['dadangnhap']) && $_SESSION['dadangnhap']==true):?>
                    <div class="name-login mr-2">
                        <?= $_SESSION['kh_ten'] ?>
                        <br>
                        <a href="/kiddiirecords.com/front-end/logout.php">Đăng xuất</a>
                    </div>
                <?php endif;?>
                <a href="login.php"><img src="/kiddiirecords.com/assets/img/logo/user-logo.jpg" class="cartuser1" /></a>
                <button type="button" class="m-0 p-0" data-toggle="modal" data-target="#exampleModal12"
                    style="border:none; background-color:white;">
                    <a href="#"><img src="/kiddiirecords.com/assets/img/logo/cart-logo.jpg" class="cartuser1" /></a>
                </button>
            </div>


            <!-- xl lower breakpoint -->
            

            <!-- smaller search -->
            <div class="xl-lower-brandbar col-sm-3 col-md-3 col-lg-3 flex-div">
                <a href="#"><img src="/kiddiirecords.com/assets/img/logo/small-menu-logo.png"" class="cartuser1-xl-lower img-fluid" /></a>

                <a href="#"><img src="/kiddiirecords.com/assets/img/logo/search-logo.png" class="cartuser1-xl-lower img-fluid" /></a>
            </div>

            <!-- smaller logo -->
            <div class="xl-lower-brandbar col-sm-6 col-md-6 col-lg-6 flex-div">
                <img src="/kiddiirecords.com/assets/img/logo/brand-logo-2.png" class="logo01-xl-lower img-fluid">
            </div>

            <!-- smaller register & cart & menu-->
            <div class="xl-lower-brandbar col-sm-3 col-md-3 col-lg-3 flex-div">
                <a href="/kiddiirecords.com/front-end/login.php"><img src="/kiddiirecords.com/assets/img/logo/user-logo.jpg" class="cartuser1-xl-lower img-fluid" /></a>
                <button type="button" class="m-0 p-0" data-toggle="modal" data-target="#exampleModal12"
                    style="border:none; background-color:white;">
                    <a href="#"><img src="/kiddiirecords.com/assets/img/logo/cart-logo.jpg" class="cartuser1-xl-lower img-fluid" /></a>
                </button>
            </div>
        </div>
    </div>