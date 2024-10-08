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
         body {
        background-color: #f8f9fa;
      }
      .course-card {
        margin: 20px 0;
        border-radius: 10px;
        border: 1px solid #dee2e6;
      }
      .course-header {
        background: linear-gradient(135deg, #6c757d, #adb5bd);
        color: white;
        border-bottom: 1px solid #dee2e6;
      }
      .content-card {
        margin-top: 10px;
        border-radius: 5px;
        border: 1px solid #dee2e6;
      }
      .content-header {
        background-color: #f8f9fa;
        color: #495057;
      }
      .content-list {
        list-style-type: none;
        padding-left: 0;
      }
      .content-list li {
        padding: 5px 0;
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
 
    <!-- Course Content -->
    <div class="container my-5">
        <h2 class="text-center mb-4">Courses</h2>

        <!-- Course 1 -->
        <div class="course-card">
            <div class="card course-header">
                <h5 class="card-title p-3">Course: Web Development</h5>
            </div>
            <div class="card-body">
                <!-- Books -->
                <div class="card content-card">
                    <div class="card-header content-header">Books</div>
                    <div class="card-body">
                        <ul class="content-list">
                            <li><a href="#">HTML & CSS Basics</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Videos -->
                <div class="card content-card">
                    <div class="card-header content-header">Videos</div>
                    <div class="card-body">
                        <ul class="content-list">
                            <li><a href="#">Introduction to HTML</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Notes -->
                <div class="card content-card">
                    <div class="card-header content-header">Notes</div>
                    <div class="card-body">
                        <ul class="content-list">
                            <li><a href="#">HTML Structure Overview</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Course 2 -->
        <div class="course-card">
            <div class="card course-header">
                <h5 class="card-title p-3">Course: Data Structures</h5>
            </div>
            <div class="card-body">
                <!-- Books -->
                <div class="card content-card">
                    <div class="card-header content-header">Books</div>
                    <div class="card-body">
                        <ul class="content-list">
                            <li><a href="#">Introduction to Algorithms</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Videos -->
                <div class="card content-card">
                    <div class="card-header content-header">Videos</div>
                    <div class="card-body">
                        <ul class="content-list">
                            <li><a href="#">Sorting Algorithms</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Notes -->
                <div class="card content-card">
                    <div class="card-header content-header">Notes</div>
                    <div class="card-body">
                        <ul class="content-list">
                            <li><a href="#">Array and List Operations</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
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




   

