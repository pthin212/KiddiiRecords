<?php
    // Hàm session_id() sẽ trả về giá trị SESSION_ID (tên file session do Web Server tự động tạo)
    // Nếu trả về Rỗng hoặc NULL => chưa có file Session tồn tại
    if (session_id() === '') {
        // Yêu cầu Web Server tạo file Session để lưu trữ giá trị tương ứng với CLIENT (Web Browser đang gởi Request)
        session_start();
    }

    include_once __DIR__ . '/../dbconnect.php';

    // Lấy thông tin người dùng gởi đến
    $sp_id = $_POST['sp_id'];

    // Lưu trữ giỏ hàng trong session
    if (isset($_SESSION['giohangdata'])) {
        $data = $_SESSION['giohangdata'];
        
        if(isset($data[$sp_id])) {
            unset($data[$sp_id]);
        }

        // lưu dữ liệu giỏ hàng vào session
        $_SESSION['giohangdata'] = $data;
    }

    // 3. Chuyển đổi dữ liệu về định dạng JSON
    // Dữ liệu JSON, từ array PHP -> JSON 
    echo json_encode($_SESSION['giohangdata']);
?>