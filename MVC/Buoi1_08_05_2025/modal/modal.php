<?php
    include ('../MODAL/connect.php');
    class data_giangduong {
        public function insert_gd($giangduong, $giaovien, $monday) {
            global $conn;
            $sql = "INSERT INTO giangduong (giangduong, giaovien, monday) VALUES ('$giangduong', '$giaovien', '$monday')";
            $run = mysqli_query($conn, $sql);
            return $run;
        }
        public function select_gd(){
            global $conn;
            $sql = "SELECT * FROM giangduong";
            $run = mysqli_query($conn, $sql);
            return $run;
        }

        public function select_gd_by_id($id){
            global $conn;
            $sql = "SELECT * FROM giangduong WHERE ID_giangduong = '$id'";
            $run = mysqli_query($conn, $sql);
            return $run;
        }

        public function select_gd_by_name($name){
            global $conn;
            $sql = "SELECT * FROM giangduong WHERE giangduong = '$name'";
            $run = mysqli_query($conn, $sql);
            return $run;
        }

        public function update_gd($giangduong, $giaovien, $monday, $id){
            global $conn;
            $sql = "UPDATE giangduong SET giangduong = '$giangduong', giaovien = '$giaovien', monday = '$monday' WHERE ID_giangduong = '$id'";
            $run = mysqli_query($conn, $sql);
            return $run;
        }

        public function delete_gd($id){
            global $conn;
            $sql = "DELETE FROM giangduong WHERE ID_giangduong = '$id'";
            $run = mysqli_query($conn, $sql);
            return $run;
        }
        
    }
?>