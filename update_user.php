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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Center form in the middle of the page */
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            background-color: #50b90041;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            animation: fadeIn 0.8s ease-in-out;
        }
        
        /* Input styling */
        .form-control {
            margin-bottom: 15px;
            transition: box-shadow 0.3s ease-in-out;
        }
        
        .form-control:focus {
            box-shadow: 0 0 10px rgba(0, 123, 255, 0.5);
        }
        
        /* Animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Button styling */
        .btn-update {
            width: 100%;
            background-color: #094200;
            color: #ffffff;
            border: none;
            padding: 10px;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }
        
        .btn-update:hover {
            background-color: #00b35f;
        }
    </style>
</head>

<body style="background-color: #ffffff;">

    <div class="container">
        <h2 class="text-center mb-4">Update User Information</h2>
        <form action="./update_user.php" method="post">
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo $user['first_name']; ?>" required>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo $user['last_name']; ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $user['email']; ?>" required>
            </div>
            <div class="form-group">
                <label for="role">Role</label>
                <input type="text" class="form-control" id="role" name="role" value="<?php echo $user['role']; ?>" required>
            </div>
            <button type="submit" class="btn btn-update">Update User</button>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>