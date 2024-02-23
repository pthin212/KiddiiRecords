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
    <!-- footer -->
    <link href="/kiddiirecords.com/back-end/css/footer.css" type="text/css" rel="stylesheet" />
    <!-- create-edit CSS-->
    <link href="/kiddiirecords.com/back-end/css/cre-edi.css" type="text/css" rel="stylesheet" />
    
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
        img,ul,li{
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

            <!-- form area -->
            <div class="col-10 mt-2">
                <!-- form header -->
                <div class="text-center cre-edi-header m-0 p-0">
                    <hr class="hr-add-prod mt-0 mb-4 p-0">
                        <b>THAY ĐỔI BẢN GHI</b>
                        <br>
                        <small>Bản ghi cho "Sự kiện"</small>
                    <hr class="hr-add-prod mt-4 mb-1 p-0">
                </div>

                <!-- form create -->
                <!-- form create - data -->
                <?php
                    $sk_id = $_GET['sk_id'];
                    $sqlSelectDuLieuCu="SELECT * FROM sukien WHERE sk_id=$sk_id;";
                    $resultDuLieuCu= mysqli_query($conn,$sqlSelectDuLieuCu);
                    $dataDuLieuCu= [];
                    while($row=mysqli_fetch_array($resultDuLieuCu,MYSQLI_ASSOC))
                    {
                        $dataDuLieuCu=array(
                            'sk_id'=> $row['sk_id'],
                            'sk_noidung' => $row['sk_noidung'],
                            'sk_tacgia'=>$row['sk_tacgia'],
                            'sk_ngay'=>$row['sk_ngay'],
                            'sk_duongdan'=> $row['sk_duongdan'],
                            'sk_hinhanh'=> $row['sk_hinhanh']
                        );
                    }
                ?>

                <!-- form create - form -->
                <form name="frmThemMoi" id="frmThemMoi"method="POST" action="" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="sk_tacgia">Tác giả:</label>
                                <input type="text" name="sk_tacgia" class="form-control" value="<?= $dataDuLieuCu['sk_tacgia']?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="sk_ngay">Ngày:</label>
                                <input type="text" name="sk_ngay" class="form-control" value="<?= $dataDuLieuCu['sk_ngay']?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <lable for="">Nội dung:</label>
                        <textarea id="sk_noidung" name="sk_noidung" class="form-control"><?= $dataDuLieuCu['sk_noidung']?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="sk_duongdan">Đường dẫn:</label>
                        <input type="text" name="sk_duongdan" class="form-control" value="<?= $dataDuLieuCu['sk_duongdan']?>">
                    </div>
                    <div class="form-group">
                        <lable>Hình sự kiện: </lable>
                        <div>
                            <input type="hidden" name="sk_hinhanh" value="<?=$dataDuLieuCu['sk_hinhanh']?>">
                            <img src="/kiddiirecords.com/assets/img/uploads_events/<?=$dataDuLieuCu['sk_hinhanh']?>" style="width:300px;" id="preview-img"/>
                        </div>
                        <input type="file" name="sk_hinhanh" id="sk_hinhanh" class="form-control"/>
                    </div>

                    <div class="form-group flex-div">
                        <a href="index.php" class="btn btn-outline-secondary mr-2">Quay lại</a>
                        <button name="btnLuu" class="btn btn-outline-primary">Xác nhận</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Xu li du lieu - Kiem tra dinh dung dan du lieu 2 - Sever -->
    <?php
        if(isset($_POST['btnLuu'])){
            // Set lai mui gio Viet Nam
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $sk_noidung=$_POST['sk_noidung'];
            $sk_tacgia=$_POST['sk_tacgia'];
            $sk_ngay=$_POST['sk_ngay'];
            $sk_duongdan=$_POST['sk_duongdan'];
            $sk_hinhanh=$_POST['sk_hinhanh'];
            
            // Kiem tra nguoi dung co chon file de upload chua
            if(!empty($_FILES['sk_hinhanh']['name'])){   
                $uploadDir= __DIR__ . '/../../assets/img/uploads_events/';
                //Chuan bi ten file moi & ghep chuoi chuyen ten file
                $newFileName=date('Ymd_His') . $_FILES['sk_hinhanh']['name'];

                //Lay duong dan nguon va duong dan dich voi ham move de chuyen
                move_uploaded_file($_FILES['sk_hinhanh']['tmp_name'], $uploadDir . $newFileName);

                //Xoa hinh cu
                unlink($uploadDir . $sk_hinhanh);

                //Cap nhat lai ten hinh
                $sk_hinhanh=$newFileName;
            }
            //Thuc thi cau lenh update
            $sqlUpdate="UPDATE sukien SET sk_noidung='$sk_noidung', sk_tacgia='$sk_tacgia', sk_ngay='$sk_ngay', sk_duongdan='$sk_duongdan', sk_hinhanh='$sk_hinhanh' WHERE sk_id=$sk_id;";
            mysqli_query($conn,$sqlUpdate);
            //Dieu huong ve danh sach
            echo '<script>location.href="index.php"</script>';
        }
    ?>

    <?php
    include_once __DIR__ . '/../layouts/footer.php';
    ?>
    <?php
    include_once __DIR__ . '/../layouts/scripts.php';
    ?>

    <script>
        $(document).ready(function(){
            const reader = new FileReader();
            const fileInput = document.getElementById("sk_hinhanh");
            const img = document.getElementById("preview-img");
                reader.onload = e => {
                    img.src = e.target.result;
                }
            fileInput.addEventListener('change',e => {
                const f = e.target.files[0];
                reader.readAsDataURL(f);
            })
        });
    </script>
</body>
</html>