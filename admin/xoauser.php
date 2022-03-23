<<<<<<< HEAD
<?php
    require '../inc/config.php';
    
    $email = $_GET['email'];

    // sql to delete a record
    $sql = "DELETE FROM user WHERE email=".$email;

    if ($conn->query($sql) === TRUE) {
        header('Location: qlkhachhang.php');
    } else {
        echo "Error deleting record: " . $conn->error;
    }

$conn->close();

?>
        <script>
function myFunction() {
    alert("Xóa thành công");
}
</script>
=======
<?php
    require '../inc/config.php';
    
    $email = $_GET['email'];

    // sql to delete a record
    $sql = "DELETE FROM user WHERE email=".$email;

    if ($conn->query($sql) === TRUE) {
        header('Location: qlkhachhang.php');
    } else {
        echo "Error deleting record: " . $conn->error;
    }

$conn->close();

?>
        <script>
function myFunction() {
    alert("Xóa thành công");
}
</script>
>>>>>>> 0396f2fa91151088037834d86aa8e78b857d6af3
