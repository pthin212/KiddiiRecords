<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="200" />
    <title>KRs - TABLES - PRODUCTS</title>
    <link rel="icon" href="/kiddiirecords.com/assets/img/logo/brand-logo-1.png">
    
    <!-- Lien ket cac file CSS-->
    <!-- general -->
    <link href="/kiddiirecords.com/back-end/css/general.css" type="text/css" rel="stylesheet" />
    <!-- header -->
    <link href="/kiddiirecords.com/back-end/css/header.css" type="text/css" rel="stylesheet" />
    <!-- nav-menu / sidebar -->
    <link href="/kiddiirecords.com/back-end/css/nav-menu.css" type="text/css" rel="stylesheet" />
    <!-- index -->
    <link href="/kiddiirecords.com/back-end/css/index.css" type="text/css" rel="stylesheet" />
    <!-- footer -->
    <link href="/kiddiirecords.com/back-end/css/footer.css" type="text/css" rel="stylesheet" />
    
    <!-- Lien ket thu vien CSS -->
    <?php
    include_once __DIR__ . '/../layouts/styles.php';
    ?>

    <!-- Lien ket cac font -->
    <?php
    include_once __DIR__ . '/../layouts/font.php';
    ?>

    <style>
        /* div{
            border: 1px solid red;
        }
        a,img,ul,li{
            border: 1px solid green;
        } */
    </style> 
</head>
<body>
    <!-- Ket noi CSDL -->
    <?php
    include_once __DIR__ . '/../dbconnect.php';
    ?>

    <!-- header -->
    <?php
    include_once __DIR__ . '/../layouts/header.php';
    ?>

    <div class="container custom-container b-font">
        <div class="row pb-2">
            <!-- nav-menu -->
            <div class="col-2">
                <?php
                    include_once __DIR__ . '/../layouts/sidebar.php';
                ?>
            </div>

            <!-- main table -->
            <div class="col-10 mt-2">
                
                <!-- Chuan bi du lieu danh sach san pham -->
                <?php
                    $sqlSanPham = "SELECT sp.sp_id, sp_ten, sp_giagoc, sp_soluong, sp_mota, ns.ns_ten, dd.dd_ten, hsp.hsp_src,km.km_tyle, sp_trending
                    FROM sanpham sp LEFT JOIN nghesi ns ON sp.ns_id=ns.ns_id
                        LEFT JOIN dinhdang dd ON sp.dd_id=dd.dd_id
                        LEFT JOIN hinhsanpham hsp ON sp.sp_id=hsp.sp_id
                        LEFT JOIN khuyenmai km ON sp.km_id=km.km_id
                    WHERE hsp.hsp_src IS NULL OR (hsp.hsp_src IS NOT NULL AND hsp.hsp_isfontcover=1)";
                    $resultSanPham = mysqli_query($conn,$sqlSanPham);
                    $dataSanPham=[];
                    while($row=mysqli_fetch_array($resultSanPham,MYSQLI_ASSOC))
                    {
                        $dataSanPham[]=array(
                            'sp_id' => $row['sp_id'],
                            'sp_ten' => $row['sp_ten'],
                            'sp_giagoc' => $row['sp_giagoc'],
                            'sp_soluong' => $row['sp_soluong'],
                            'sp_mota' => $row['sp_mota'],
                            'sp_trending' => $row['sp_trending'],
                            'ns_ten' => $row['ns_ten'],
                            'dd_ten' => $row['dd_ten'],
                            'hsp_src' => $row['hsp_src'],
                            'km_tyle' => $row['km_tyle']
                        );
                    }
                ?>
                <a href="create.php" class="btn btn-outline-dark add-btn mt-2 mb-2">
                    THÊM DỮ LIỆU MỚI
                </a>
                <!-- Bang danh sach san pham -->
                <table id="danhsachsanpham" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Hình sản phẩm</th>
                            <th>Tên</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th class="limit-mota">Mô tả</th>
                            <th>Nghệ sĩ</th>
                            <th>Định dạng</th>
                            <th>Xu hướng</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($dataSanPham as $sp):?>
                            <tr>
                                <td><?= $sp['sp_id']?></td>
                                <td>
                                    <img src="/kiddiirecords.com/assets/img/uploads_productimgs/<?= $sp['hsp_src']?>" class="sp_hinhdaidien p-1">
                                </td>
                                <td><?= $sp['sp_ten']?></td>
                                <td>
                                    <?php
                                        $giamoi= $sp['sp_giagoc'] - $sp['sp_giagoc']*($sp['km_tyle']/100.0)
                                    ?>
                                    <?=  number_format($giamoi,0,'.',',')?>
                                    <?php if($sp['km_tyle'] != 0):?>
                                        <br>
                                        <small><del><?= number_format($sp['sp_giagoc'],0,'.',',')?></del></small>
                                    <?php endif;?>
                                </td>
                                <td><?= $sp['sp_soluong']?></td>
                                <td class="limit-mota"><?= $sp['sp_mota']?></td>
                                <td><?= $sp['ns_ten']?></td>
                                <td><?= $sp['dd_ten']?></td>
                                <td><?= $sp['sp_trending']?></td>
                                <td>
                                    <a href="edit.php?sp_id=<?=$sp['sp_id']?>" class="btn btn-outline-info">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </a>
                                    <br>
                                    <a href="#" class="sweetalert-btn-d btn btn-outline-danger mt-1" data-sp_id="<?=$sp['sp_id']?>">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </a> 
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php
    include_once __DIR__ . '/../layouts/footer.php';
    ?>
    <?php
    include_once __DIR__ . '/../layouts/scripts.php';
    ?>

    <script>
        $(document).ready(function() {
            // sweetalert
            $('.sweetalert-btn-d').click(function(){
                var sp_id = $(this).data('sp_id');
                Swal.fire({
                    title: 'Bạn có chắc chắn muốn xóa?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        location.href="delete.php?sp_id="+sp_id;
                    }
                })
            });

            $('#danhsachsanpham').DataTable({
                data: this.products,
                scrollX: 100, // Nội dụng của table sẽ hiện thị với with 400px, Nếu quá thì sẽ có thanh scroll
                scrollY: 500, // Nội dụng của table sẽ hiện thị với with 400px, Nếu quá thì sẽ có thanh scroll
                language: {
                    processing: "Dữ liệu đang được tải lên...",
                    lengthMenu: "Hiển thị: _MENU_",
                    search: "Tìm kiếm",
                    info: "Hiển thị _START_ đến _END_ trên tổng _TOTAL_ mục",
                    infoEmpty: "Hiển thị 0 đến 0 trên tổng _TOTAL_ mục",
                    zeroRecords: "Không tìm thấy bản ghi phù hợp",
                    emptyTable: "Không có dữ liệu",
                    paginate: {
                        first: "Trang đầu",
                        previous: "Trang trước",
                        next: "Trang sau",
                        last: "Trang cuối"
                    },
                },
            });
        });
    </script>

</body>
</html>