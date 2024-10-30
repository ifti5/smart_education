<?php
include("./db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM users WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('User deleted successfully'); window.location.href = './add_delete_user.php';</script>";
    } else {
        echo "<script>alert('Error deleting record: " . $conn->error . "'); window.location.href = './add_delete_user.php';</script>";
    }
}

$conn->close();
?>