<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Marks Submission</title>
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
        <h1 class="text-center">Marks Submission</h1>

        <!-- Select Course and Section -->
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
                        <label for="section" class="form-label">Select Section</label>
                        <select id="section" class="form-select">
                            <option selected>Select a Section</option>
                            <option value="A">Section A</option>
                            <option value="B">Section B</option>
                            <option value="C">Section C</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-custom">Get Student List</button>
                </form>
            </div>
        </div>

        <!-- Marks Entry Table -->
        <div class="card">
            <div class="card-body">
                <h3>Enter Marks</h3>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Student ID</th>
                            <th>Student Name</th>
                            <th>Midterm</th>
                            <th>Final</th>
                            <th>Class Test 1</th>
                            <th>Class Test 2</th>
                            <th>Assignment</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2024001</td>
                            <td>John Doe</td>
                            <td><input type="number" class="form-control" placeholder="Midterm Marks"></td>
                            <td><input type="number" class="form-control" placeholder="Final Marks"></td>
                            <td><input type="number" class="form-control" placeholder="Class Test 1"></td>
                            <td><input type="number" class="form-control" placeholder="Class Test 2"></td>
                            <td><input type="number" class="form-control" placeholder="Assignment"></td>
                        </tr>
                        <tr>
                            <td>2024002</td>
                            <td>Jane Smith</td>
                            <td><input type="number" class="form-control" placeholder="Midterm Marks"></td>
                            <td><input type="number" class="form-control" placeholder="Final Marks"></td>
                            <td><input type="number" class="form-control" placeholder="Class Test 1"></td>
                            <td><input type="number" class="form-control" placeholder="Class Test 2"></td>
                            <td><input type="number" class="form-control" placeholder="Assignment"></td>
                        </tr>
                        <!-- Add more student rows as needed -->
                    </tbody>
                </table>
                <button class="btn btn-custom">Submit Marks</button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
