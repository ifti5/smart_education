<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">


</head>
<style>
    .card {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }
        .card:hover {
            transform: translateY(-10px);
        }
        .card img {
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }
        .badge-custom {
            background-color: #000708;
            color: #fff;
            position: absolute;
            top: 10px;
            right: 10px;
            border-radius: 50%;
            padding: 10px;
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

<!-- home page offered course start -->

      <section class="homecourse">
        <div class="container mt-5">
            <h2 class="text-center">FREE Courses</h2>
            <ul class="nav nav-pills justify-content-center mt-4 mb-4" id="categoryTabs" role="tablist">
                <li class="nav-item">
                    <button class="nav-link active" id="design-tab" data-bs-toggle="pill" data-bs-target="#design" type="button" role="tab" aria-controls="design" aria-selected="true">Design</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" id="marketing-tab" data-bs-toggle="pill" data-bs-target="#marketing" type="button" role="tab" aria-controls="marketing" aria-selected="false">Marketing</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" id="finance-tab" data-bs-toggle="pill" data-bs-target="#finance" type="button" role="tab" aria-controls="finance" aria-selected="false">Finance</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" id="music-tab" data-bs-toggle="pill" data-bs-target="#music" type="button" role="tab" aria-controls="music" aria-selected="false">Music</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" id="education-tab" data-bs-toggle="pill" data-bs-target="#education" type="button" role="tab" aria-controls="education" aria-selected="false">Education</button>
                </li>
            </ul>
    
            <div class="tab-content" id="categoryTabsContent">
                <div class="tab-pane fade show active" id="design" role="tabpanel" aria-labelledby="design-tab">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="card p-3">
                                <!-- <span class="badge badge-custom">90</span> -->
                                <img src="https://via.placeholder.com/600x200" class="card-img-top" alt="Design 1">
                                <div class="card-body">
                                    <h5 class="card-title">Design 1</h5>
                                    <p class="card-text">Lorem Ipsum dolor sit amet consectetur.</p>
                                    <a href="#" class="btn btn-primary">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <!-- Add more design courses as needed -->
                    </div>
                </div>
                <div class="tab-pane fade" id="marketing" role="tabpanel" aria-labelledby="marketing-tab">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="card p-3">
                                <span class="badge badge-custom">85</span>
                                <img src="https://via.placeholder.com/600x200" class="card-img-top" alt="Marketing 1">
                                <div class="card-body">
                                    <h5 class="card-title">Marketing 1</h5>
                                    <p class="card-text">Lorem Ipsum dolor sit amet consectetur.</p>
                                    <a href="#" class="btn btn-primary">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <!-- Add more marketing courses as needed -->
                    </div>
                </div>
                <div class="tab-pane fade" id="finance" role="tabpanel" aria-labelledby="finance-tab">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="card p-3">
                                <span class="badge badge-custom">80</span>
                                <img src="https://via.placeholder.com/600x200" class="card-img-top" alt="Finance 1">
                                <div class="card-body">
                                    <h5 class="card-title">Finance 1</h5>
                                    <p class="card-text">Lorem Ipsum dolor sit amet consectetur.</p>
                                    <a href="#" class="btn btn-primary">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <!-- Add more finance courses as needed -->
                    </div>
                </div>
                <div class="tab-pane fade" id="music" role="tabpanel" aria-labelledby="music-tab">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="card p-3">
                                <span class="badge badge-custom">78</span>
                                <img src="https://via.placeholder.com/600x200" class="card-img-top" alt="Music 1">
                                <div class="card-body">
                                    <h5 class="card-title">Music 1</h5>
                                    <p class="card-text">Lorem Ipsum dolor sit amet consectetur.</p>
                                    <a href="#" class="btn btn-primary">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <!-- Add more music courses as needed -->
                    </div>
                </div>
                <div class="tab-pane fade" id="education" role="tabpanel" aria-labelledby="education-tab">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="card p-3">
                                <span class="badge badge-custom">75</span>
                                <img src="https://via.placeholder.com/600x200" class="card-img-top" alt="Education 1">
                                <div class="card-body">
                                    <h5 class="card-title">Education 1</h5>
                                    <p class="card-text">Lorem Ipsum dolor sit amet consectetur.</p>
                                    <a href="#" class="btn btn-primary">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <!-- Add more education courses as needed -->
                    </div>
                </div>
            </div>
        </div>
      </section>
<!-- home page offered course end  -->
<!-- home page carousel -->
<section>
    <div class="container mt-5">
        <h2 class="text-center mb-4">News</h2>
    
        <!-- News Carousel -->
        <div id="newsCarousel" class="carousel slide mb-5" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./asset/img/carousel/carousel1.jpg" class="d-block w-100 carousel-img" alt="News 1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Headline 1</h5>
                        <p>Summary of the news 1...</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./asset/img/carousel/carousel2.jpg" class="d-block w-100 carousel-img" alt="News 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Headline 2</h5>
                        <p>Summary of the news 2...</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./asset/img/carousel/carousel3.jpg" class="d-block w-100 carousel-img" alt="News 3">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Headline 3</h5>
                        <p>Summary of the news 3...</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#newsCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#newsCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        
    
        <!-- News Section with Cards -->
       
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-img-wrapper">
                        <img src="./asset/carousel1.jpg" class="card-img-top" alt="News 1">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Headline 1</h5>
                        <p class="card-text">This is a longer summary of the news 1 to give more details about the story...</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-img-wrapper">
                        <img src="./asset/carousel2.jpg" class="card-img-top" alt="News 2">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Headline 2</h5>
                        <p class="card-text">This is a longer summary of the news 2 to give more details about the story...</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-img-wrapper">
                        <img src="./asset/carousel3.jpg" class="card-img-top" alt="News 3">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Headline 3</h5>
                        <p class="card-text">This is a longer summary of the news 3 to give more details about the story...</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>
<!-- home page carousel end -->

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