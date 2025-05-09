<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buoi 2</title>
    <!-- link bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- link css -->
     <link rel="stylesheet" href="../view/style.css">
</head>
<body>
    <div class="container">
        <form action="../controller/controller.php" method="POST">
          
          <div class="form-group">
                <label for="name">Họ và tên:</label>
                <input type="text" id="name" name="txtname" placeholder="Nhập họ và tên..." required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="txtemail"  placeholder="Email...." required>
            </div>
            <div class="form-group">
                <label for="phone">Số điện thoại:</label>
                <input type="text" id="phone" name="txtphone"  placeholder="Số điện thoại..." required>
            </div>
            <div class="form-group">
                <label for="mess">Tin nhắn:</label>
                <textarea id="mess" name="txtmess" placeholder="Message..." required></textarea>
            </div>
            <button type="submit" name="txtsub"> Send </button>

        </form>
    </div>
    <div class="container">
        
<?php
            include ("../modal/modal.php");//Gọi trang Control
            $getdata=new data_contact();//Gọi lớp data
            $select=$getdata->select_all();//Gọi function select trong trang control
   ?>
                  <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                         <th>ID</th>
                         <th>Name</th>
                         <th>Email</th>
                         <th>Phone</th>
                         <th>Message</th>
                         <th colspan= “2”>Option</th>
                         
                    </tr>
                   </thead>
           <?php 
                   foreach($select as $se_pro)//Duyệt dữ liệu trả về từ database
                {// Duyệt dữ liệu đến đâu rồi thực hiện in vào các hàng trong bảng
            ?>
        <tr>
                   <td><?php echo $se_pro['ID_Contact']?></td>
                   <td><?php echo $se_pro['Name']?></td>
                   <td><?php echo $se_pro['Email']?></td>
                   <td><?php echo $se_pro['Phone']?></td>
                   <td><?php echo $se_pro['Mess']?></td>
                   <td><button>edit</button> <button>delete</button></td>
       </tr>
            <?php } ?>
       </tbody>
       </table>

       <?php
include('../modal/modal.php');
$get_data=new data_contact();
$delete=$get_data->delete_contact($_GET['del']); //Gọi function tương ứng với tham số là giá trị truyền trang
if($delete) header('location:admin_contact.php');// nếu xóa thành công thì chuyển trang
else echo "not delete";
?>

    </div>



             
        
<!-- link bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>