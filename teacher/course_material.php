<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teacher Panel - Assign Courses</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .card {
      margin: 15px;
      border-radius: 10px;
    }
    .card-header {
      background: linear-gradient(135deg, #495057, #6c757d);
      color: white;
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
  <div class="container my-5">
    <h2 class="text-center mb-4">Assign or Remove Courses</h2>

    <!-- Assign Course Section -->
    <div class="card">
      <div class="card-header">Assign Course Materials</div>
      <div class="card-body">
        <form>
          <!-- Select Course -->
          <div class="mb-3">
            <label for="courseSelect" class="form-label">Select Course</label>
            <select class="form-select" id="courseSelect">
              <option>Select Course</option>
              <option>Web Development</option>
              <option>Data Structures</option>
            </select>
          </div>

          <!-- Select Section -->
          <div class="mb-3">
            <label for="sectionSelect" class="form-label">Select Section</label>
            <select class="form-select" id="sectionSelect">
              <option>Select Section</option>
              <option>A</option>
              <option>B</option>
            </select>
          </div>

          <!-- Select Category -->
          <div class="mb-3">
            <label for="categorySelect" class="form-label">Select Material Category</label>
            <select class="form-select" id="categorySelect">
              <option>Select Category</option>
              <option>Book</option>
              <option>Video</option>
              <option>PDF</option>
            </select>
          </div>

          <!-- File Upload -->
          <div class="mb-3">
            <label for="fileUpload" class="form-label">Upload File (Video/PDF)</label>
            <input class="form-control" type="file" id="fileUpload">
          </div>

          <!-- Submit Button -->
          <button type="submit" class="btn btn-primary">Assign Course Material</button>
        </form>
      </div>
    </div>

    <!-- Remove Course Section -->
    <div class="card">
      <div class="card-header">Remove Assigned Courses</div>
      <div class="card-body">
        <form>
          <!-- Select Course to Remove -->
          <div class="mb-3">
            <label for="removeCourseSelect" class="form-label">Select Course to Remove</label>
            <select class="form-select" id="removeCourseSelect">
              <option>Select Course</option>
              <option>Web Development</option>
              <option>Data Structures</option>
            </select>
          </div>
          <!-- Remove Button -->
          <button type="submit" class="btn btn-danger">Remove Course Material</button>
        </form>
      </div>
    </div>
  </div>

</body>
</html>
