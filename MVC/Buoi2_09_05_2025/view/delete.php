<?php
include("../modal/modal.php");//Gọi trang Control
$get_data=new data_contact();
$delete=$get_data->delete_contact($_GET['del']); //Gọi function tương ứng với tham số là giá trị truyền trang
if($delete) header('location:admin_contact.php');// nếu xóa thành công thì chuyển trang
else echo "not delete";
?>
