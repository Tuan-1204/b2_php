<?php
include('../modal/connect.php');

class data_contact
{
    public function insert_contact($fullname, $email, $phone, $mess)
    {
        global $conn;
        $sql = "insert into contact(Name,Email,Phone,Mess)
              values('$fullname','$email','$phone','$mess')";
        $run = mysqli_query($conn, $sql);
        return $run;
        
    }

  public function select_all()
{
    global $conn;
    $sql = "select * from contact";
    $run = mysqli_query($conn, $sql);
    return $run;
}

    public function delete_contact($id)
    {
        global $conn;
        $sql = "DELETE FROM contact WHERE ID_contact='$id'";
        return mysqli_query($conn, $sql);
    }

    function select_contact_id($id)
        {
          global $conn;
          $sql="select * from table where ID_contact='$id'";
          $run=mysqli_query($conn, $sql);
          return $run;
        }






    public function update_contact($name, $email, $phone, $mess, $id)
    {
        global $conn;
        $sql = "UPDATE contact SET Name='$name', Email='$email', Phone='$phone', Mess='$mess' WHERE ID_contact='$id'";
        return mysqli_query($conn, $sql);
    }
    function update_contact_id($name, $email,$phone,$mess,$id)
        {
          global $conn;
          $sql="update table set Name='$name',
                                 Email='$email',
                                 Phone='$phone',
                                 Mess='$mess'
                                  where ID_Contact='$id'";
          $run=mysqli_query($conn, $sql); 
          return $run;
        }



}


?>