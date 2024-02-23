<?php
    $sp_id = $_GET['sp_id'];
    include_once __DIR__ . '/../dbconnect.php'; 
    $sql_fk1="DELETE FROM hinhsanpham WHERE sp_id=$sp_id";
    $sql="DELETE FROM sanpham WHERE sp_id=$sp_id";  
    mysqli_query($conn,$sql_fk1);
    mysqli_query($conn,$sql);
    echo '<script>location.href="index.php";</script>';
?>