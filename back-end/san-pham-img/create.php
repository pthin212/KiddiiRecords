<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="200" />
    <title>KRs - TABLES - PRODUCTimgs</title>
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
                        <small>Bản ghi cho "Hình sản phẩm"</small>
                    <hr class="hr-add-prod mt-4 mb-1 p-0">
                </div>

                <!-- form create -->
                <!-- form create - data -->
                <?php
                    //Lua chon "San Pham"
                    $sqlsp = "SELECT DISTINCT sp_id,sp_ten
                    FROM sanpham
                    ORDER BY sp_ten";
                    $resultsp = mysqli_query($conn,$sqlsp);
                    $datasp=[];
                    while($row=mysqli_fetch_array($resultsp,MYSQLI_ASSOC))
                    {
                        $datasp[]=array(
                            'sp_id' => $row['sp_id'],
                            'sp_ten' => $row['sp_ten'],
                        );
                    }
                ?>

                <!-- form create - form -->
                <form name="frmThemMoi" id="frmThemMoi"method="POST" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Tên sản phẩm:</label><br>
                        <select name="sp_id" class="form-control">
                            <?php foreach($datasp as $sp):?>
                                <option value="<?=$sp['sp_id']?>">
                                    <?=$sp['sp_ten']?>
                                </option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Đại diện:</label>
                        <select name="hsp_isfontcover" class="form-control">
                            <option value=0>Không</option>
                            <option value=1>Có</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <lable>Hình sản phẩm: </lable>
                        <div>
                            <img src="/kiddiirecords.com/assets/img/be-img/default-no-img.jpg" style="width:300px;" id="preview-img"/>
                        </div>
                        <input type="file" name="hsp_src" id="hsp_src" class="form-control"/>
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
            $sp_id=$_POST['sp_id'];
            $hsp_isfontcover=$_POST['hsp_isfontcover'];
            
            // Kiem tra nguoi dung co chon file de upload chua
            if(!empty($_FILES['hsp_src']['name'])){   
                $uploadDir= __DIR__ . '/../../assets/img/uploads_productimgs/';
                //Chuan bi ten file moi & ghep chuoi chuyen ten file
                $newFileName=date('Ymd_His') . $_FILES['hsp_src']['name'];

                //Lay duong dan nguon va duong dan dich voi ham move de chuyen
                move_uploaded_file($_FILES['hsp_src']['tmp_name'], $uploadDir . $newFileName);
                
                //luu vao database
                $sqlInsert = "INSERT INTO hinhsanpham(hsp_src,sp_id, hsp_isfontcover) VALUES('$newFileName',$sp_id,$hsp_isfontcover)";
                mysqli_query($conn,$sqlInsert);

                //Dieu huong ve danh sach
                echo '<script>location.href="index.php"</script>';
            }
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
            const fileInput = document.getElementById("hsp_src");
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