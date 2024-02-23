<?php
    $hsp_id = $_GET['hsp_id'];
    include_once __DIR__ . '/../dbconnect.php'; 
    $sqlSelectDuLieuCu="SELECT hsp_id,hsp_src FROM hinhsanpham WHERE hsp_id=$hsp_id;";
    $resultDuLieuCu= mysqli_query($conn,$sqlSelectDuLieuCu);
    $dataDuLieuCu= [];
    while($row=mysqli_fetch_array($resultDuLieuCu,MYSQLI_ASSOC))
    {
        $dataDuLieuCu=array(
            'hsp_id'=> $row['hsp_id'],
            'hsp_src' => $row['hsp_src'],
        );
    }
    //Xoa file rac
    $uploadDir = __DIR__ . '/../../assets/img/uploads_productimgs/';
    unlink($uploadDir . $dataDuLieuCu['hsp_src']);
    //Xoa dong du lieu trong database
    $sqlDelete="DELETE FROM hinhsanpham WHERE hsp_id=$hsp_id";
    mysqli_query($conn,$sqlDelete);
    //Dieu huong
    echo '<script>location.href="index.php"</script>';
?>