<?php
    session_start();

    unset($_SESSION['dadangnhap']);
    unset($_SESSION['kh_email']);
    unset($_SESSION['kh_hotendem']);
    unset($_SESSION['kh_ten']);
    unset($_SESSION['kh_phanquyen']);
    unset($_SESSION['kh_hotendem']);
    unset($_SESSION['kh_gioitinh']);
    unset($_SESSION['kh_sodienthoai']);

    echo '<script>location.href = "admin-login.php"</script>';
?>