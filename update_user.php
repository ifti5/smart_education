<?php    
include ('./db.php');


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT first_name, last_name, email, role FROM users WHERE id=$id";
    $result = $conn->query($sql);
    $user = $result->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $role = mysqli_real_escape_string($conn, $_POST['role']);

    $sql = "UPDATE users SET first_name='$first_name', last_name='$last_name', email='$email', role='$role' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('User updated successfully'); window.location.href = 'user_list.php';</script>";
    } else {
        echo "<script>alert('Error updating record: " . $conn->error . "'); window.location.href = 'user_list.php';</script>";
    }
}

$conn->close();
?>


<!-- HTML Form for updating -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update User</title>
</head>

<body>
    <form action="./update_user.php" method="post">
        <input type="text" name="first_name" value="<?php echo $user['first_name']; ?>" required>
        <input type="text" name="last_name" value="<?php echo $user['last_name']; ?>" required>
        <input type="email" name="email" value="<?php echo $user['email']; ?>" required>
        <input type="text" name="role" value="<?php echo $user['role']; ?>" required>
        <button type="submit">Update User</button>
    </form>
</body>

</html>