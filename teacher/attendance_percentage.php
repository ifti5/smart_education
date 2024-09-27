<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Attendance Percentage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .btn-custom {
            background-color: #198754;
            color: white;
            border-radius: 20px;
        }
    </style>
</head>
<body>
    <div id="navbar-placeholder"></div>
    <script>
        fetch('navbar_faculty.html')
            .then(response => response.text())
            .then(data => {
                document.getElementById('navbar-placeholder').innerHTML = data;
            });
    </script>
    <div class="container mt-4">
        <h1 class="text-center">Student Attendance Percentage</h1>

        <!-- Search Student by ID -->
        <div class="card mb-4">
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="studentId" class="form-label">Enter Student ID</label>
                        <input type="text" class="form-control" id="studentId" placeholder="Enter Student ID">
                    </div>
                    <button type="submit" class="btn btn-custom">Search</button>
                </form>
            </div>
        </div>

        <!-- Attendance Percentage Table -->
        <div class="card">
            <div class="card-body">
                <h3>Attendance Percentage</h3>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Course Code</th>
                            <th>Attendance Percentage</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>MATH101</td>
                            <td>85%</td>
                        </tr>
                        <tr>
                            <td>HIST202</td>
                            <td>90%</td>
                        </tr>
                        <tr>
                            <td>ENG303</td>
                            <td>80%</td>
                        </tr>
                        <!-- Add more courses as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
