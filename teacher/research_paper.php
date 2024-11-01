<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Research Paper Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styles for the Approve and Deny buttons */
        .btn-custom { 
            background-color: #198754;  /* 'Approve' button color */
            color: white;
            border-radius: 20px;
        }
        .btn-custom:hover {
            background-color: #145c32;  /* Darker green on hover */
        }
        .btn-deny {
            background-color: #dc3545;  /* 'Deny' button color */
            color: white;
            border-radius: 20px;
        }
        .btn-deny:hover {
            background-color: #a71d2a;  /* Darker red on hover */
        }
    </style>
</head>
<body>
<<<<<<< HEAD
    <div id="navbar-placeholder"></div>
=======
<div id="navbar-placeholder"></div>
    <script>
        fetch('navbar_faculty.php')
            .then(response => response.text())
            .then(data => {
                document.getElementById('navbar-placeholder').innerHTML = data;
            });
    </script>
>>>>>>> 52cfb0d882ac61c6d10b1e04baece425b38bd2bb

    <div class="container mt-4">
        <h1 class="text-center">Research Paper Management</h1>

        <!-- Approve/Deny Research Paper Requests -->
        <div class="card mb-4">
            <div class="card-body">
                <h3>Approve/Deny Requests</h3>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Student ID</th>
                            <th>Paper Title</th>
                            <th>Description</th>
                            <th>PDF</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Action</th>
                            <th>Comment</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2024001</td>
                            <td>AI in Education</td>
                            <td>Research on how AI can improve educational outcomes.</td>
                            <td><a href="#" class="btn btn-link">Download PDF</a></td>
                            <td>(123) 456-7890</td>
                            <td>student@example.com</td>
                            <td>
                                <button class="btn-custom">Approve</button>
                                <button class="btn-deny">Deny</button>
                            </td>
                            <td><input type="text" class="form-control" placeholder="Enter comment"></td>
                        </tr>
                        <!-- More rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Offer Research Paper to Students -->
        <div class="card mb-4">
            <div class="card-body">
                <h3>Offer Research Paper to Students</h3>
                <form>
                    <div class="mb-3">
                        <label for="studentId" class="form-label">Enter Student ID</label>
                        <input type="text" class="form-control" id="studentId" placeholder="Enter Student ID" required>
                    </div>
                    <div class="mb-3">
                        <label for="offerPaperTitle" class="form-label">Paper Topic Name</label>
                        <input type="text" class="form-control" id="offerPaperTitle" placeholder="Enter Paper Topic Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="offerPaperDescription" class="form-label">Description</label>
                        <textarea class="form-control" id="offerPaperDescription" rows="4" placeholder="Enter Paper Description" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="offerLink" class="form-label">Research Paper Link</label>
                        <input type="url" class="form-control" id="offerLink" placeholder="Enter Link to Research Paper">
                    </div>
                    <div class="mb-3">
                        <label for="offerPhoneNumber" class="form-label">Phone Number (Optional)</label>
                        <input type="tel" class="form-control" id="offerPhoneNumber" placeholder="Enter Phone Number">
                    </div>
                    <div class="mb-3">
                        <label for="offerEmail" class="form-label">Email (Optional)</label>
                        <input type="email" class="form-control" id="offerEmail" placeholder="Enter Email">
                    </div>
                    <button type="submit" class="btn btn-custom">Offer to Student</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Fetch navbar content and include it in the current page
        fetch('navbar_faculty.html')
            .then(response => response.text())
            .then(data => {
                document.getElementById('navbar-placeholder').innerHTML = data;
            });
    </script>
</body>
</html>
