    <!-- Box GIỎ HÀNG - WITHOUT DATABASE-->
    <?php
        // Kiểm tra và lấy dữ liệutrong session
        $giohangdata = [];
        if (isset($_SESSION['giohangdata'])) {
            $giohangdata = $_SESSION['giohangdata'];
        } else {
            $giohangdata = [];
        }
    ?>
    <div class="modal fade" id="exampleModal12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header force-center-cart-title">
                    <h5 class="modal-title blackb-cart-title m-0 p-0" id="exampleModalLabel">GIỎ HÀNG</h5>
                </div>
                <div class="modal-body text-left">
                    <?php if(empty($giohangdata)):?>
                        <div class="empty-cart flex-div">
                            KHÔNG CÓ SẢN PHẨM NÀO ĐƯỢC CHỌN...
                        </div>
                    <?php else:?>
                        <?php foreach ($giohangdata as $sp) : ?>
                            <div class="row text-left mt-2 flex-div">
                                <div class="col-3">
                                    <img src="/kiddiirecords.com/assets/img/uploads_productimgs/<?= $sp['hsp_src'] ?>" class="imgthanhtoan" />
                                </div>
                                <div class="col-7">
                                    <?= $sp['ns_ten'] ?> - <?= $sp['sp_ten'] ?> - <?= $sp['dd_ten'] ?>
                                    <br />
                                    Số lượng:
                                    <input disabled type="number" id="sl1" name="sl1" min="1" max="10" value="<?= $sp['soluong'] ?>" class="ipsoluong1" />
                                </div>
                                <div class="col-2 m-0 p-0">
                                    <div class="row">
                                        <div class="col-12 flex-div">
                                        <?= number_format($sp['sp_giagoc']-$sp['sp_giagoc']*($sp['km_tyle']/100.0))?>₫
                                    </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 flex-div delete-cart">
                                            <a class="btn-delete-cartsprod" onclick="preDelCartsProd(<?= $sp['sp_id'] ?>)">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif;?>
                    <!-- button -->
                    <div class="row modal-footer mt-4 blackbnb">
                        <div class="col-12 flex-div">
                            <?php if(empty($giohangdata)):?>
                                <a href="#" class="btn btn-dark">TIẾN HÀNH THANH TOÁN</a>
                            <?php else:?>
                                <a href="checkout.php" class="btn btn-dark">TIẾN HÀNH THANH TOÁN</a>
                            <?php endif;?>
                            &nbsp;
                            <button type="button" data-dismiss="modal" class="btn btn-outline-secondary">TRỞ VỀ</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Xu ly su kien xoa -->
    <script>
        function preDelCartsProd(id) {
            // Tạo đối tượng XMLHttpRequest
            var xhr = new XMLHttpRequest();

            // Xác định phương thức và URL mục tiêu
            var method = "POST";
            var url = "/kiddiirecords.com/front-end/api/del-cartsprod.php";

            xhr.open(method, url, true);

            // Xác định nội dung của yêu cầu
            var data = "sp_id=" + encodeURIComponent(id); // Chuỗi dữ liệu bạn muốn gửi
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            // Đặt hàm callback để xử lý kết quả
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // Xử lý kết quả ở đây
                    console.log(xhr.responseText);
                }
            };

            // Gửi yêu cầu
            xhr.send(data);

            //Reload trang
            location.reload();

            /*
            // AJAX đến API xóa sản phẩm khỏi Giỏ hàng trong Session
            $.ajax({
                url: '/kiddiirecords.com/front-end/api/del-cartsprod.php',
                method: "POST",
                dataType: 'json',
                data: {
                    sp_id: id,
                },
                success: function(data) {
                    // Refresh lại trang
                    location.reload();
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }
            });
            */
        };
    </script>