<?php 
    if(isset($_POST['Edit']))
    {
    require '../inc/config.php';
    $hoten = $_POST['hoten'];
    $dienthoai = $_POST['dienthoai'];
    $email = $_GET['email'];
        $sql = "UPDATE user SET HoTen='$hoten', DienThoai='$dienthoai' 
        WHERE email LIKE '". $email ."';";
        if ($conn->query($sql) === TRUE) {
            header('Location: qlykhachhang.php');
        } 
        else {
            echo "Error updating record: " . $conn->error;
        }
        $conn->close();
    }
?>