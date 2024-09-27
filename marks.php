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
        .attendance-table th, .attendance-table td {
            text-align: center;
            vertical-align: middle;
        }
        .attendance-table textarea {
            width: 100%;
            resize: none;
        }
        .percentage {
            font-weight: bold;
        }
    </style>
</head>
<style>
    .marks-table th, .marks-table td {
        text-align: center;
        vertical-align: middle;
    }
    .total-marks {
        font-weight: bold;
    }
</style>
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

  <section>
    <div class="container my-5">
        <h2 class="text-center">Marks</h2>
        <table class="table table-bordered marks-table">
            <thead>
                <tr>
                    <th>Course</th>
                    <th>Midterm</th>
                    <th>Final</th>
                    <th>Class Test 1</th>
                    <th>Class Test 2</th>
                    <th>Assignment</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Course 1</td>
                    <td>20</td>
                    <td>40</td>
                    <td>8</td>
                    <td>9</td>
                    <td>7</td>
                    <td class="total-marks">84</td>
                </tr>
                <tr>
                    <td>Course 2</td>
                    <td>18</td>
                    <td>32</td>
                    <td>5</td>
                    <td>10</td>
                    <td>10</td>
                    <td class="total-marks">75</td>
                </tr>
                <!-- More rows can be added as needed -->
            </tbody>
        </table>
    </div>
  </section>







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