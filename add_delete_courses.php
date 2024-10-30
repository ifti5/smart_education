<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - Manage Courses</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container my-5">
    <h2 class="text-center mb-4">Admin - Manage Courses</h2>

    <!-- Success Alert -->
    <div id="successAlert" class="alert alert-success d-none" role="alert">
      <strong>&#10004; Success!</strong> Course added successfully.
    </div>

    <!-- Section for Student Courses -->
    <div class="card mb-4">
      <div class="card-header">Manage Student Courses</div>
      <div class="card-body">
        <!-- Form to Add Course for Student -->
        <form id="studentCourseForm" class="mb-3">
          <div class="row g-2">
            <div class="col-md-6">
              <input type="email" class="form-control" id="studentEmail" placeholder="Enter Student Email" required>
            </div>
            <div class="col-md-4">
              <select class="form-select" id="studentCourseSelect" required>
                <option value="" disabled selected>Select Course</option>
                <option>Web Development</option>
                <option>Data Structures</option>
                <option>Machine Learning</option>
                <option>Database Management</option>
              </select>
            </div>
            <div class="col-md-2">
              <button type="button" class="btn btn-primary w-100" onclick="addStudentCourse()">Add Course</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <!-- Section for Teacher Courses -->
    <div class="card">
      <div class="card-header">Manage Teacher Courses</div>
      <div class="card-body">
        <!-- Form to Add Course for Teacher -->
        <form id="teacherCourseForm" class="mb-3">
          <div class="row g-2">
            <div class="col-md-6">
              <input type="email" class="form-control" id="teacherEmail" placeholder="Enter Teacher Email" required>
            </div>
            <div class="col-md-4">
              <select class="form-select" id="teacherCourseSelect" required>
                <option value="" disabled selected>Select Course</option>
                <option>Web Development</option>
                <option>Data Structures</option>
                <option>Machine Learning</option>
                <option>Database Management</option>
              </select>
            </div>
            <div class="col-md-2">
              <button type="button" class="btn btn-primary w-100" onclick="addTeacherCourse()">Add Course</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script>
    // Function to show success alert
    function showSuccessAlert() {
      const alert = document.getElementById('successAlert');
      alert.classList.remove('d-none'); // Show the alert
      alert.classList.add('show'); // Trigger the Bootstrap alert "show" class

      // Hide the alert after 3 seconds
      setTimeout(() => {
        alert.classList.add('d-none');
        alert.classList.remove('show');
      }, 3000);
    }

    // Function to add a course for a student
    function addStudentCourse() {
      const email = document.getElementById('studentEmail').value;
      const courseName = document.getElementById('studentCourseSelect').value;
      if (email && courseName) {
        showSuccessAlert();
        document.getElementById('studentCourseForm').reset();
      }
    }

    // Function to add a course for a teacher
    function addTeacherCourse() {
      const email = document.getElementById('teacherEmail').value;
      const courseName = document.getElementById('teacherCourseSelect').value;
      if (email && courseName) {
        showSuccessAlert();
        document.getElementById('teacherCourseForm').reset();
      }
    }
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
