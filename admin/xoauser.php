<?php
    require '../inc/config.php';
    
    $email = $_GET['email'];

    // sql to delete a record
    $sql = "DELETE FROM loginuser WHERE email=".$email;

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
