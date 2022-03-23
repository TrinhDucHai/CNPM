<?php 
    if(isset($_POST['Edit']))
    {
    require '../inc/config.php';
    $email = $_POST['email'];
    $hoten = $_POST['hoten'];
    $dienthoai = $_POST['dienthoai'];
    if($email == null)
    {
        $sql = "UPDATE user SET HoTen='$hoten', DienThoai='$dienthoai' 
        WHERE email= ' $email ' " ;
        if ($conn->query($sql) === TRUE) {
            header('Location: qlykhachhang.php');
        } else {
            echo "Error updating record: " . $conn->error;
        }
        $conn->close();
    }
    else{
        $sql = "UPDATE user SET HoTen='$hoten', DienThoai='$dienthoai' 
        WHERE email= '$email ' " ;
        if ($conn->query($sql) === TRUE) {
            header('Location: qlykhachhang.php');
        } else {
            echo "Error updating record: " . $conn->error;
        }
        $conn->close();
        }
    }
?>