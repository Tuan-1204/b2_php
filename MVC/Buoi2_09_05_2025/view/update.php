<?php
include("../modal/modal.php");//Gọi trang Control
$get_data=new data_contact();//Gọi lớp data
$select_contact=$get_data->select_contact_id($_GET['up']);
foreach($select_contact as $se_con)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <form method="post" >
<input type="text" name="txtname" value= “<?php echo $se_con['Name'] ?>” />
<input type="email" name="txtemail" value= “<?php echo $se_con['Email'] ?>” />
<input type="text" name="txtphone" value= “<?php echo $se_con['Phone'] ?>” />
<input type="text" name="txtmess" value= “<?php echo $se_con['Mess'] ?>”  />
<button type="submit" name="txtsub"> Send </button>
   </form>

   <?php
                              
      if(isset($_POST['txtsub'])){
      move_uploaded_file($_FILES['txtfile']['tmp_name'],
                                       'images/'.$_FILES['txtfile']['name']);
// upload file từ client lên thư mục image thuộc server
     $update=$get_data->update_contact_id($_POST['txtname'],
                                       $_POST['txtemail'],
                                       $_POST['txtphone'],
                                       $_POST['txtmess'],
                                       $_GET['up']);
      if($update) header('location:contact.php');
      else echo "Không cập nhật được";
                              }
  ?>


</body>
</html>