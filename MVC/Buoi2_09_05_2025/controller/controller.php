<?php
include("../modal/modal.php"); //Gọi trang model
$get_data = new data_contact();

?>

<?php
if (isset($_POST['txtsub'])) {

    $insert = $get_data->insert_contact(
        $_POST['txtname'],
        $_POST['txtemail'],
        $_POST['txtphone'],
        $_POST['txtmess']
    );
    if ($insert)
        echo "<script>alert('Cám ơn bạn đã liên hệ')</script>";
    else
        echo "<script>alert('Không thực thi được')</script>";
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete = $get_data->delete_contact($id);
    if ($delete) {
        header('Location: ../controller/controller.php');
        exit();
    } else {
        echo "<script>alert('Không xóa được!'); window.location='../controller/controller.phpp';</script>";
        exit();
    }
}

if (isset($_POST['txtsub'])) {
    $update = $get_data->update_contact(
        $_POST['txtname'],
        $_POST['txtemail'],
        $_POST['txtphone'],
        $_POST['txtmess'],
        $_GET['ups']
    );
    if ($update) {
        header('Location: ../controller/controller.php');
        exit();
    } else {
        echo "<script>alert('Không cập nhật được!'); window.location='../controller/controller.php';</script>";
        exit();
    }
   

}
?>
