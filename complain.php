<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<style>
    .complaint-form {
        max-width: 600px;
        margin: 50px auto;
        padding: 20px;
        background-color: #f8f9fa;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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
    <div class="container">
        <div class="complaint-form">
            <h2 class="text-center">Submit a Complaint</h2>
            <form>
                <div class="mb-3">
                    <label for="subject" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="subject" placeholder="Enter the subject of your complaint" required>
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">Complaint Details</label>
                    <textarea class="form-control" id="body" rows="5" placeholder="Describe your complaint in detail" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email address" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Submit Complaint</button>
            </form>
        </div>
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






<!-- Bootstrap Body -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>         
</body>
</html>