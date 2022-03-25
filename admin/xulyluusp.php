<?php
if(isset($_POST['create']))
{
    require '../inc/config.php';
    $name = $_POST['name'];
    $hinhanh = $_FILES['hinhanh']['name'];
    move_uploaded_file($_FILES['hinhanh']['tmp_name'] , '../images/'.$_FILES['hinhanh']['name']);
    $manhasx = $_POST['manhasx'];
    $gia = $_POST['gia'];
    $tacgia = $_POST['tacgia'];
    $mota = $_POST['editor1'];
    $sql="INSERT INTO  sanpham (Ten,HinhAnh,Manhasx,Gia,Mota,tacgia) 
    VALUES ('$name','$hinhanh' ,'$manhasx',' $gia','$mota','$tacgia') ";
    
    if (mysqli_query($conn, $sql)) {
        header('Location: qlysanpham.php');

    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>