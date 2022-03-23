<?php
    require '../inc/config.php';
    
    $email = $_GET['email'];

    // sql to delete a record
    $sql = "DELETE FROM loginuser WHERE email=".$email;

    if ($conn->query($sql) === TRUE) {
        header('Location: qlykhachhang.php');
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

    $sql = "DELETE FROM user WHERE email=".$email;


    $sql = "DELETE FROM loginuser WHERE email=".$email;


    if ($conn->query($sql) === TRUE) {
        header('Location: qlykhachhang.php');
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

