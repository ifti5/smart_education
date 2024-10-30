<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .achievement-table th, .achievement-table td {
            text-align: center;
            vertical-align: middle;
        }
        .upload-form input, .upload-form textarea {
            margin-bottom: 15px;
        }
    </style>
</head>

<body class="body">

    
<section class="homepagecontent"> 
    <!-- navigation bar start  -->
    <div id="navbar-placeholder"></div>
    <script>
        fetch('navbar.php')
            .then(response => response.text())
            .then(data => {
                document.getElementById('navbar-placeholder').innerHTML = data;
            });
    </script>

  

      <!-- naviagtion bar end  -->
      <div class="container my-5">
        <h2 class="text-center">Achievements</h2>

        <!-- Upload Achievement Form -->
        <div class="upload-form my-4">
            <h4>Upload New Achievement</h4>
            <form>
                <div class="mb-3">
                    <label for="achievementName" class="form-label">Achievement Name</label>
                    <input type="text" class="form-control" id="achievementName" placeholder="Enter achievement name">
                </div>
                <div class="mb-3">
                    <label for="achievementDate" class="form-label">Date</label>
                    <input type="date" class="form-control" id="achievementDate">
                </div>
                <div class="mb-3">
                    <label for="achievementCertificate" class="form-label">Upload Certificate</label>
                    <input type="file" class="form-control" id="achievementCertificate">
                </div>
                <div class="mb-3">
                    <label for="achievementComment" class="form-label">Comment</label>
                    <textarea class="form-control" id="achievementComment" rows="3" placeholder="Enter any comments"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Upload</button>
            </form>
        </div>

        <!-- Achievements Table -->
        <table class="table table-bordered achievement-table">
            <thead>
                <tr>
                    <th>Achievement Name</th>
                    <th>Date</th>
                    <th>Certificate</th>
                    <th>Comment</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Course Completion - Web Development</td>
                    <td>2024-07-15</td>
                    <td><a href="#" class="btn btn-sm btn-outline-primary">View Certificate</a></td>
                    <td>Completed with distinction.</td>
                </tr>
                <tr>
                    <td>Inter-College Basketball Championship</td>
                    <td>2024-06-22</td>
                    <td><a href="#" class="btn btn-sm btn-outline-primary">View Certificate</a></td>
                    <td>Winner of the championship.</td>
                </tr>
                <!-- More rows can be added as needed -->
            </tbody>
        </table>
    </div>

<!-- footer  -->
<section>
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="social-icons">
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-twitter"></i></a>
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="important-links">
                            <a href="#">Home</a> | 
                            <a href="#">Courses</a> | 
                            <a href="#">About Us</a> | 
                            <a href="#">Contact</a>
                        </div>
                    </div>
                    <div class="col-md-4 text-end">
                        <div class="logofooter">
                            <img src="./asset/img/logo.png" alt="Smart Education Logo">
                        </div>
                    </div>
                </div>
                <div class="rights mt-3">
                    <p>&copy; 2024 Smart Education System. All rights reserved.</p>
                </div>
            </div>
        </footer>
</section>

</section>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>





<!-- Bootstrap Body -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>         
</body>
</html>