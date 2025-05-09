<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng ký Giảng Đường</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', Arial, sans-serif;
            background: #f0f4f8;
        }
        .container {
            width: 100%;
            max-width: 420px;
            margin: 40px auto;
            border-radius: 16px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.10), 0 1.5px 4px rgba(0,0,0,0.08);
            background: #e6fff2;
            padding: 32px 24px 24px 24px;
        }
        .container table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 10px;
        }
        .container th {
            font-size: 2em;
            color: #009688;
            padding-bottom: 18px;
            font-weight: 700;
            letter-spacing: 1px;
        }
        .container td {
            padding: 0 0 10px 0;
        }
        .label {
            color: #009688;
            font-weight: 700;
            font-size: 1.1em;
            width: 38%;
            vertical-align: middle;
        }
        .input {
            width: 62%;
        }
        input[type="text"], select {
            width: 100%;
            padding: 8px 10px;
            font-size: 1em;
            border: 1.5px solid #b2dfdb;
            border-radius: 6px;
            background: #fff;
            transition: border 0.2s;
            outline: none;
        }
        input[type="text"]:focus, select:focus {
            border: 1.5px solid #009688;
        }
        .submit-row {
            text-align: center;
            padding-top: 10px;
        }
        input[type="submit"] {
            font-size: 1.1em;
            padding: 8px 32px;
            background: linear-gradient(90deg, #26c6da 0%, #009688 100%);
            color: #fff;
            border: none;
            border-radius: 6px;
            font-weight: 700;
            cursor: pointer;
            box-shadow: 0 2px 8px rgba(0,150,136,0.10);
            transition: background 0.2s, transform 0.1s;
        }
        input[type="submit"]:hover {
            background: linear-gradient(90deg, #009688 0%, #26c6da 100%);
            transform: translateY(-2px) scale(1.03);
        }
        @media (max-width: 600px) {
            .container {
                padding: 18px 6px 18px 6px;
            }
            .container th {
                font-size: 1.3em;
            }
            .label {
                font-size: 1em;
            }
        }
        .action-btn {
            display: inline-block;
            padding: 6px 16px;
            border-radius: 5px;
            font-size: 1em;
            font-weight: 600;
            text-decoration: none;
            margin: 0 2px;
            transition: background 0.2s, color 0.2s, box-shadow 0.2s;
            box-shadow: 0 1px 4px rgba(0,0,0,0.07);
        }
        .edit-btn {
            background: #2196f3;
            color: #fff;
            border: none;
        }
        .edit-btn:hover {
            background: #1565c0;
            color: #fff;
        }
        .delete-btn {
            background: #e53935;
            color: #fff;
            border: none;
        }
        .delete-btn:hover {
            background: #b71c1c;
            color: #fff;
        }
        .list-container {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.10), 0 1.5px 4px rgba(0,0,0,0.08);
            padding: 32px 24px 24px 24px;
            max-width: 900px;
            margin: 40px auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <form method="POST" action="../controller/controller.php">
            <table>
                <tr>
                    <th colspan="2">Đăng ký Giảng Đường</th>
                </tr>
                <tr>
                    <td class="label">Giảng đường:</td>
                    <td class="input">
                        <select name="giangduong">
                            <option value="501">GĐ 501</option>
                            <option value="502">GĐ 502</option>
                            <option value="503">GĐ 503</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="label">Tên giáo viên:</td>
                    <td class="input">
                        <input type="text" name="giaovien" required />
                    </td>
                </tr>
                <tr>
                    <td class="label">Môn dạy:</td>
                    <td class="input">
                        <select name="monday">
                            <option value="Linux">Linux</option>
                            <option value="Web">Web</option>
                            <option value="CSDL">CSDL</option>
                            <option value="Lập trình php">Lập trình php</option>
                            <option value="Lập trình C">Lập trình C</option>
                            <option value="Lập trình Java">Lập trình Java</option>
                            <option value="Lập trình C#">Lập trình C#</option>
                            <option value="Lập trình Python">Lập trình Python</option>
                            <option value="Lập trình Android">Lập trình Android</option>
                            <option value="Lập trình IOS">Lập trình IOS</option>
                            <option value="Lập trình React">Lập trình React</option>
                            <option value="Lập trình NodeJS">Lập trình NodeJS</option>
                            <option value="Lập trình Angular">Lập trình Angular</option>
                            <option value="Lập trình VueJS">Lập trình VueJS</option>
                            <option value="Lập trình Flutter">Lập trình Flutter</option>
                            <option value="Lập trình React Native">Lập trình React Native</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="submit-row">
                        <input type="submit" name="txtsub" value="Đăng Ký" />
                    </td>
                </tr>
            </table>
        </form>
        <?php
            include_once "../modal/modal.php";
            $get_data = new data_giangduong();
            if(isset($_POST['txtsub'])){
                $in_gd=$get_data->insert_gd($_POST['giangduong'], $_POST['giaovien'], $_POST['monday']);
                if($in_gd){
                    echo "<script>alert('Đăng ký thành công!'); window.location.href='../view/giangduong.php';</script>";
                }else{
                    echo "<script>alert('Đăng ký thất bại!'); window.location.href='../view/giangduong.php';</script>";
                }
            }
        ?>
    </div>


    <!-- display all the record & action -->
    <div class="container list-container" style="margin-top: 32px;">
        <h1>Danh sách giảng đường đã đăng ký</h1>
        <table border="1" cellpadding="8" style="width:100%; border-collapse:collapse;">
            <tr style="background:#e0f7fa; color:#00796b;">
                <th>ID</th>
                <th>Giảng đường</th>
                <th>Giáo viên</th>
                <th>Môn dạy</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
            <?php
                include_once "../modal/modal.php";
                $get_data = new data_giangduong();
                $data = $get_data->select_gd();
                $rows = [];
                if ($data && mysqli_num_rows($data) > 0) {
                    while ($row = mysqli_fetch_assoc($data)) {
                        $rows[] = $row;
                    }
                    foreach ($rows as $row) {
                        echo "<tr>";
                        echo "<td>".$row['ID_giangduong']."</td>";
                        echo "<td>".$row['giangduong']."</td>";
                        echo "<td>".$row['giaovien']."</td>";
                        echo "<td>".$row['monday']."</td>";
                        echo "<td><a class='action-btn edit-btn' href='?edit_id=".$row['ID_giangduong']."'>Sửa</a></td>";
                        echo "<td><a class='action-btn delete-btn' href='?id=".$row['ID_giangduong']."' onclick=\"return confirm('Bạn có chắc muốn xóa?');\">Xóa</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6' style='color:red;'>Chưa có dữ liệu!</td></tr>";
                    if (!$data) {
                        echo "<tr><td colspan='6' style='color:red;'>Lỗi truy vấn: " . mysqli_error($conn) . "</td></tr>";
                    }
                }
            ?>
        </table>
    </div>

<?php
// Handle delete action
if (isset($_GET['id'])) {
    include_once "../modal/modal.php";
    $get_data = new data_giangduong();
    $id = intval($_GET['id']);
    $get_data->delete_gd($id);
    echo "<script>window.location.href='giangduong.php';</script>";
}

// Handle edit form display and update
if (isset($_GET['edit_id'])) {
    include_once "../modal/modal.php";
    $get_data = new data_giangduong();
    $edit_id = intval($_GET['edit_id']);
    $result = $get_data->select_gd_by_id($edit_id);
    $edit_row = mysqli_fetch_assoc($result);
    if ($edit_row) {
        echo '<div class="container" style="margin-top:24px;">';
        echo '<h2>Sửa thông tin giảng đường</h2>';
        echo '<form method="POST">';
        echo '<input type="hidden" name="edit_id" value="'.$edit_row['ID_giangduong'].'">';
        echo '<label>Giảng đường:</label><input type="text" name="giangduong" value="'.$edit_row['giangduong'].'" required><br><br>';
        echo '<label>Giáo viên:</label><input type="text" name="giaovien" value="'.$edit_row['giaovien'].'" required><br><br>';
        echo '<label>Môn dạy:</label><input type="text" name="monday" value="'.$edit_row['monday'].'" required><br><br>';
        echo '<input type="submit" name="updateSub" value="Cập nhật">';
        echo '</form>';
        echo '</div>';
    }
}
if (isset($_POST['updateSub'])) {
    include_once "../modal/modal.php";
    $get_data = new data_giangduong();
    $id = intval($_POST['edit_id']);
    $giangduong = $_POST['giangduong'];
    $giaovien = $_POST['giaovien'];
    $monday = $_POST['monday'];
    $get_data->update_gd($giangduong, $giaovien, $monday, $id);
    echo "<script>alert('Cập nhật thành công!'); window.location.href='giangduong.php';</script>";
}
?>
</body>
</html>
