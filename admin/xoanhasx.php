<?php
    require '../inc/config.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM nhaxuatban WHERE ID=".$id;

    if ($conn->query($sql) === TRUE) {
        header('Location: qlynhasx.php');
    } else {
        echo "Error deleting record: " . $conn->error;
    }
$conn->close();
?>
</script>