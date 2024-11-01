<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Attendance Submission</title>
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
<<<<<<< HEAD
        fetch('navbar_faculty.html')
=======
        fetch('navbar_faculty.php')
>>>>>>> 52cfb0d882ac61c6d10b1e04baece425b38bd2bb
            .then(response => response.text())
            .then(data => {
                document.getElementById('navbar-placeholder').innerHTML = data;
            });
    </script>
    <div class="container mt-4">
        <h1 class="text-center">Attendance Submission</h1>

        <!-- Select Course and Date -->
        <div class="card mb-4">
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="courseCode" class="form-label">Select Course Code</label>
                        <select id="courseCode" class="form-select">
                            <option selected>Select a Course</option>
                            <option value="MATH101">MATH101</option>
                            <option value="HIST202">HIST202</option>
                            <option value="ENG303">ENG303</option>
                            <!-- More course codes can be added here -->
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="attendanceDate" class="form-label">Select Date</label>
                        <input type="date" class="form-control" id="attendanceDate">
                    </div>
                    <button type="submit" class="btn btn-custom">Get Student List</button>
                </form>
            </div>
        </div>

        <!-- Student List with Attendance Marking -->
        <div class="card">
            <div class="card-body">
                <h3>Mark Attendance</h3>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Student ID</th>
                            <th>Student Name</th>
                            <th>Attendance</th>
                            <th>Comment</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2024001</td>
                            <td>John Doe</td>
                            <td>
                                <select class="form-select">
                                    <option selected>Present</option>
                                    <option>Absent</option>
                                </select>
                            </td>
                            <td><input type="text" class="form-control" placeholder="Enter comment"></td>
                        </tr>
                        <tr>
                            <td>2024002</td>
                            <td>Jane Smith</td>
                            <td>
                                <select class="form-select">
                                    <option selected>Present</option>
                                    <option>Absent</option>
                                </select>
                            </td>
                            <td><input type="text" class="form-control" placeholder="Enter comment"></td>
                        </tr>
                        <!-- Add more student rows as needed -->
                    </tbody>
                </table>
                <button class="btn btn-custom">Submit Attendance</button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
