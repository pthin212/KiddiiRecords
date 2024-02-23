<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="200" />
    <title>KRs - TABLES - EVENTS</title>
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
                    $sqlSuKien = "SELECT * FROM sukien";
                    $resultSuKien = mysqli_query($conn,$sqlSuKien);
                    $dataSuKien=[];
                    while($row=mysqli_fetch_array($resultSuKien,MYSQLI_ASSOC))
                    {
                        $dataSuKien[]=array(
                            'sk_id' => $row['sk_id'],
                            'sk_noidung' => $row['sk_noidung'],
                            'sk_tacgia' => $row['sk_tacgia'],
                            'sk_ngay' => $row['sk_ngay'],
                            'sk_duongdan' => $row['sk_duongdan'],
                            'sk_hinhanh' => $row['sk_hinhanh']
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
                            <th>Hình sự kiện</th>
                            <th>Nội dung</th>
                            <th>Tác giả</th>
                            <th>Ngày</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($dataSuKien as $sk):?>
                            <tr>
                                <td><?= $sk['sk_id']?></td>
                                <td>
                                    <img src="/kiddiirecords.com/assets/img/uploads_events/<?= $sk['sk_hinhanh']?>" class="sp_hinhdaidien p-1">
                                </td>
                                <td><?= $sk['sk_noidung']?></td>
                                <td><?= $sk['sk_tacgia']?></td>
                                <td><?= $sk['sk_ngay']?></td>
                                <td>
                                    <a href="edit.php?sk_id=<?=$sk['sk_id']?>" class="btn btn-outline-info">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </a>
                                    <br>
                                    <a href="#" class="sweetalert-btn-d btn btn-outline-danger mt-1" data-sk_id="<?=$sk['sk_id']?>">
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
                var sk_id = $(this).data('sk_id');
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
                        location.href="delete.php?sk_id="+sk_id;
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