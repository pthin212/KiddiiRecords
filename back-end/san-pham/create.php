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
                        <b>THÊM BẢN GHI MỚI</b>
                        <br>
                        <small>Bản ghi cho "Sản phẩm"</small>
                    <hr class="hr-add-prod mt-4 mb-1 p-0">
                </div>

                <!-- form create -->
                <!-- form create - data -->
                <?php
                    //Lua chon "Khuyen Mai"
                    $sqlKhuyenMai = "SELECT * FROM khuyenmai;";
                    $resultKhuyenMai = mysqli_query($conn,$sqlKhuyenMai);
                    $dataKhuyenMai=[];
                    while($row=mysqli_fetch_array($resultKhuyenMai,MYSQLI_ASSOC))
                    {
                        $dataKhuyenMai[]=array(
                            'km_id' => $row['km_id'],
                            'km_ten' => $row['km_ten'],
                            'km_tyle' => $row['km_tyle'],
                            'km_khac' => $row['km_khac'],
                        );
                    }

                    //Lua chon "Nghe Si"
                    $sqlNgheSi = "SELECT * FROM nghesi;";
                    $resultNgheSi = mysqli_query($conn,$sqlNgheSi);
                    $dataNgheSi=[];
                    while($row=mysqli_fetch_array($resultNgheSi,MYSQLI_ASSOC))
                    {
                        $dataNgheSi[]=array(
                            'ns_id' => $row['ns_id'],
                            'ns_ten' => $row['ns_ten']
                        );
                    }

                    //Lua chon "Dinh Dang"
                    $sqlDinhDang = "SELECT * FROM dinhdang;";
                    $resultDinhDang = mysqli_query($conn,$sqlDinhDang);
                    $dataDinhDang=[];
                    while($row=mysqli_fetch_array($resultDinhDang,MYSQLI_ASSOC))
                    {
                        $dataDinhDang[]=array(
                            'dd_id' => $row['dd_id'],
                            'dd_ten' => $row['dd_ten'],
                        );
                    }
                ?>

                <!-- form create - form -->
                <form name="frmThemMoi" id="frmThemMoi"method="POST" action="">
                    <div class="form-group">
                        <label for="sp_ten">Tên sản phẩm:</label>
                        <input type="text" name="sp_ten" class="form-control">
                    </div>
                    <div class="form-row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="sp_giagoc">Giá gốc:</label>
                                <input type="number" name="sp_giagoc" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <label for="">Khuyến mãi:</label>
                                <select name="km_id" class="form-control">
                                    <?php foreach($dataKhuyenMai as $index => $km):?>
                                        <?php if($index==0):?>
                                            <option value="<?=$km['km_id']?>" selected>
                                                <?=$km['km_ten']?>
                                            </option>
                                        <?php else:?>
                                            <option value="<?=$km['km_id']?>">
                                                <?=$km['km_ten']?>, Giảm <?=$km['km_tyle']?>% và <?=$km['km_khac']?>.
                                            </option>
                                        <?php endif;?>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="sp_soluong">Số lượng:</label>
                        <input type="number" id="sp_soluong" name="sp_soluong" class="form-control">
                    </div>
                    <div class="form-group">
                        <lable for="">Mô tả:</label>
                        <textarea id="sp_mota" name="sp_mota" class="form-control"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label>Định dạng:</label><br>
                                <select name="dd_id" class="form-control">
                                    <?php foreach($dataDinhDang as $dd):?>
                                        <option value="<?=$dd['dd_id']?>">
                                            <?=$dd['dd_ten']?>
                                        </option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label>Nghệ sĩ:</label><br>
                                <select name="ns_id" class="form-control">
                                    <?php foreach($dataNgheSi as $ns):?>
                                        <option value="<?=$ns['ns_id']?>">
                                            <?=$ns['ns_ten']?>
                                        </option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label>Xu hướng:</label>
                                <select name="sp_trending" class="form-control">
                                    <option value=0>Không</option>
                                    <option value=1>Có</option>
                                </select>
                            </div>
                        </div>
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
            $sp_ten = $_POST['sp_ten'];
            $sp_giagoc = $_POST['sp_giagoc'];
            $sp_soluong = $_POST['sp_soluong'];
            $sp_mota = $_POST['sp_mota'];
            $km_id = $_POST['km_id'];
            $ns_id = $_POST['ns_id'];
            $dd_id = $_POST['dd_id'];
            $sp_trending = $_POST['sp_trending'];

            $errors=[]; // Mang chua loi

            //Kiem tra "Ten san pham"
            if(empty($sp_ten))
            {
                $errors['sp_ten'][]=[
                    'rule' => 'required',
                    'rule_value' => true,
                    'value' => $sp_ten,
                    'msg' => 'Cần nhập tên sản phẩm!'
                ];
            }
            else if(strlen($sp_ten)>50)
            {
                $errors['sp_ten'][]=[
                    'rule' => 'maxlength',
                    'rule_value' => 50,
                    'value' => $sp_ten,
                    'msg' => 'Cần phập tên sản phẩm dưới 50 kí tự!'
                ];
            }
            //Kiem tra "Gia goc"
            if(empty($sp_giagoc))
            {
                $errors['sp_giagoc'][]=[
                    'rule' => 'required',
                    'rule_value' => true,
                    'value' => $sp_giagoc,
                    'msg' => 'Cần nhập giá gốc sản phẩm!'
                ];
            }
            else if(strlen($sp_giagoc)>10)
            {
                $errors['sp_giagoc'][]=[
                    'rule' => 'maxlength',
                    'rule_value' => 10,
                    'value' => $sp_giagoc,
                    'msg' => 'Cần phập giá gốc sản phẩm dưới 10 kí tự!'
                ];
            }
            else if($sp_giagoc<0)
            {
                $errors['sp_giagoc'][]=[
                    'rule' => 'negative',
                    'rule_value' => true,
                    'value' => $sp_giagoc,
                    'msg' => 'Giá gốc sản phẩm không được âm!'
                ];
            }
            //Kiem tra "So luong"
            if(empty($sp_soluong))
            {
                $errors['sp_soluong'][]=[
                    'rule' => 'required',
                    'rule_value' => true,
                    'value' => $sp_soluong,
                    'msg' => 'Cần nhập số lượng sản phẩm!'
                ];
            }
            else if(strlen($sp_soluong)>5)
            {
                $errors['sp_soluong'][]=[
                    'rule' => 'maxlength',
                    'rule_value' => 5,
                    'value' => $sp_soluong,
                    'msg' => 'Cần phập số lượng sản phẩm dưới 5 kí tự!'
                ];
            }
            else if($sp_soluong<0)
            {
                $errors['sp_giagoc'][]=[
                    'rule' => 'negative',
                    'rule_value' => true,
                    'value' => $sp_soluong,
                    'msg' => 'Số lượng sản phẩm không được âm!'
                ];
            }
            //Kiem tra "Mo ta"
            if(strlen($sp_mota)>200)
            {
                $errors['sp_mota'][]=[
                    'rule' => 'maxlength',
                    'rule_value' => 200,
                    'value' => $sp_mota,
                    'msg' => 'Cần phập mô tả sản phẩm dưới 200 kí tự!'
                ];
            }
            
            //Kiem tra va tien hanh luu giu lieu
            if(count($errors)==0)
            {
                $sqlInsert = "INSERT INTO sanpham (sp_ten, sp_giagoc, sp_soluong, sp_mota, sp_trending, ns_id, dd_id, km_id)
                VALUES ('$sp_ten',$sp_giagoc,$sp_soluong,'$sp_mota',$sp_trending, $ns_id, $dd_id, $km_id);";
                mysqli_query($conn,$sqlInsert);
                echo '<script>location.href="index.php"</script>';
            }
        }
    ?>

    <!-- Hien thi loi - Kiem tra dinh dung dan du lieu 2 - Sever -->
    <?php if(isset($_POST['btnLuu']) && isset($errors) && count($errors)>0):?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>CẦN KIỂM TRA LẠI CÁC THÔNG TIN SAU:</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <ol>
                <?php foreach($errors as $fields):?>
                    <?php foreach($fields as $f):?>
                        <li> <?= $f['msg']?>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </ol>
        </div>
    <?php endif;?>

    <?php
    include_once __DIR__ . '/../layouts/footer.php';
    ?>
    <?php
    include_once __DIR__ . '/../layouts/scripts.php';
    ?>

    <script>
        ClassicEditor
            .create( document.querySelector('#sp_mota'))
            .catch(error => {
                console.error(error);
            });
        // Xu li du lieu - Kiem tra dinh dung dan du lieu 1 - Client
        $(document).ready(function(){
            //Jquery Validation
            $('#frmThemMoi').validate({
                rules:
                {
                    sp_ten:
                    {
                        required: true,
                        maxlength: 50
                    },
                    sp_giagoc:
                    {
                        required: true,
                        maxlength: 10
                    },
                    sp_soluong:
                    {
                        required: true,
                        maxlength: 5
                    }
                },
                messages:
                {
                    sp_ten:
                    {
                        required: 'Nhập tên sản phẩm!',
                        maxlength: 'Tên sản phẩm phải ít hơn 50 kí tự!'
                    },
                    sp_giagoc:
                    {
                        required: 'Nhập giá tiền!',
                        maxlength: 'Giá gốc sản phẩm phải ít hơn 10 kí tự!'
                    },
                    sp_soluong:
                    {
                        required: 'Nhập số lượng!',
                        maxlength: 'Số lượng sản phẩm phải ít hơn 5 kí tự!'
                    }
                }
            })
        });
    </script>
</body>
</html>