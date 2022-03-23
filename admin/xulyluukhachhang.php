

<?php
if(isset($_POST['create']))
{
    require '../inc/config.php';
    $name = $_POST['name'];
    $email = $_POST[ 'email'];
    $pass = $_POST[ 'pass'];
    $phone = $_POST[ 'phone'];
    $sql="INSERT INTO  user (HoTen, email, matkhau, DienThoai) 
    VALUES ('$name', '$email', '$pass', '$phone')";
    // echo  $mk;
    if (mysqli_query($conn, $sql)) {
        header('Location: qlykhachhang.php');
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>