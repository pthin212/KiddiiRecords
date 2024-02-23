<?php
    $sk_id = $_GET['sk_id'];
    include_once __DIR__ . '/../dbconnect.php'; 
    $sqlSelectDuLieuCu="SELECT sk_id,sk_hinhanh FROM sukien WHERE sk_id=$sk_id;";
    $resultDuLieuCu= mysqli_query($conn,$sqlSelectDuLieuCu);
    $dataDuLieuCu= [];
    while($row=mysqli_fetch_array($resultDuLieuCu,MYSQLI_ASSOC))
    {
        $dataDuLieuCu=array(
            'sk_id'=> $row['sk_id'],
            'sk_hinhanh' => $row['sk_hinhanh'],
        );
    }
    //Xoa file rac
    $uploadDir = __DIR__ . '/../../assets/img/uploads_events/';
    unlink($uploadDir . $dataDuLieuCu['sk_hinhanh']);
    //Xoa dong du lieu trong database
    $sqlDelete="DELETE FROM sukien WHERE sk_id=$sk_id";
    mysqli_query($conn,$sqlDelete);
    //Dieu huong
    echo '<script>location.href="index.php"</script>';
?>