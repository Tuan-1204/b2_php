<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Kết nối CSDL
    require_once '../modal/connect.php';
    require_once '../modal/modal.php';
    // Lấy dữ liệu từ form
    $giangduong = isset($_POST['giangduong']) ? $_POST['giangduong'] : '';
    $giaovien = isset($_POST['giaovien']) ? $_POST['giaovien'] : '';
    $monday = isset($_POST['monday']) ? $_POST['monday'] : '';

    // Validate dữ liệu
    if ($giangduong && $giaovien && $monday) {
        $sql = "INSERT INTO giangduong (giangduong, giaovien, monday) VALUES ('$giangduong', '$giaovien', '$monday')";
        $conn->query($sql);
        echo "<script>alert('Đăng ký thành công!'); window.location.href='../view/giangduong.php';</script>";
    } else {
        echo "<script>alert('Vui lòng nhập đầy đủ thông tin!'); window.history.back();</script>";
    }
    $conn->close();
} else {
    header('Location: ../view/giangduong.php');
    exit();
} 

?>