<?php
    require '../inc/config.php';
    
    $email = $_GET['email'];

    $sql = "DELETE FROM user WHERE email LIKE '". $email ."';";

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

