<?php
 include("./db.php");

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = mysqli_real_escape_string($conn, $_POST['role']);

    $sql = "INSERT INTO users (first_name, last_name, email, password, role) VALUES ('$first_name', '$last_name', '$email', '$password', '$role')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('New user added successfully'); window.location.href = 'user_list.php';</script>";
    } else {
        echo "<script>alert('Error: " . $conn->error . "'); window.location.href = 'user_list.php';</script>";
    }
}

$conn->close();
?>













<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .btn-custom {
        background-color: #198754;
        color: white;
        border-radius: 20px;
    }

    .btn-delete {
        background-color: #dc3545;
        color: white;
        border-radius: 20px;
    }
    </style>
</head>

<body>
    <div class="container mt-4">
        <h1 class="text-center">User Management</h1>

        <!-- Add New User Section -->
        <div class="card mb-4">
            <div class="card-body">
                <h3>Add New User</h3>
                <form action="./add_delete_user.php" method="post">
                    <div class="row mb-3">
                        <div class="col">
                            <input type="text" class="form-control" name="first_name" placeholder="First Name" required>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>
                        <div class="col">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="role" placeholder="Role (Admin/Teacher/Student)"
                            required>
                    </div>
                    <button type="submit" class="btn btn-custom">Add User</button>
                </form>
            </div>
        </div>

        <?php
     include("./db.php");
        // Fetch all users
        $sql = "SELECT id, CONCAT(first_name, ' ', last_name) AS user_name, email, role FROM users";
         $result = $conn->query($sql);

        // Close the connection after all operations are complete
        $conn->close();   
        ?>

        <!-- User List and Delete Option -->
        <div class="card">
            <div class="card-body">
                <h3>Existing Users</h3>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($result->num_rows > 0): ?>
                        <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['user_name']); ?></td>
                            <td><?php echo htmlspecialchars($row['email']); ?></td>
                            <td><?php echo htmlspecialchars($row['role']); ?></td>
                            <td>
                                <a href="update_user.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
                                <a href="delete_user.php?id=<?php echo $row['id']; ?>" class="btn btn-delete">Delete</a>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                        <?php else: ?>
                        <tr>
                            <td colspan="4">No users found.</td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>