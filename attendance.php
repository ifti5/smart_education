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
        <h2 class="text-center">Attendance</h2>
        <table class="table table-bordered attendance-table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Day</th>
                    <th>Course 1</th>
                    <th>Course 2</th>
                    <th>Course 3</th>
                    <th>Percentage</th>
                    <th>Comment</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2024-08-14</td>
                    <td>Monday</td>
                    <td>Present</td>
                    <td>Absent</td>
                    <td>Present</td>
                    <td class="percentage">67%</td>
                    <td><textarea rows="1"></textarea></td>
                </tr>
                <tr>
                    <td>2024-08-13</td>
                    <td>Sunday</td>
                    <td>Present</td>
                    <td>Present</td>
                    <td>Present</td>
                    <td class="percentage">100%</td>
                    <td><textarea rows="1"></textarea></td>
                </tr>
                <!-- More rows can be added as needed -->
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>






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






<!-- Bootstrap Body -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>         
</body>
</html>