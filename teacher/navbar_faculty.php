<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animated Gradient Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Gradient Animation */
        .navbar {
            background: linear-gradient(270deg, #005672, #00773e , #009f84 );
            background-size: 400% 400%;
            animation: gradient 10s ease infinite;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 25%;
            }
            25%{
                background-position: 25% 50%;
            }
            50% {
                background-position: 50% 75%;
            }
            75% {
                background-position: 75% 100%;
            }
            100%{
                background-position: 100% 75%;
            }
        }

        .navbar-nav .nav-link {
            color: white;
            font-size: 1rem;
            font-weight: 500;
            padding: 8px 15px;
        }

        .navbar-nav .nav-link:hover {
            color: #ffeb3b;
        }

        .navbar-brand img {
            height: 50px;
        }

        /* Profile Picture Style */
        .dropdown img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }

        .dropdown-menu {
            right: 0;
            left: auto;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="../asset/logo.png" alt="Logo"> <!-- Add your logo source here -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="attendance_percentage.html">Attendance Percentage</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="attendance_submission.html">Attendance Submission</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="course_material.html">Course Material</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="marks_submission.html">Marks Submission</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="research_paper.html">Research Paper</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="total_marks.html">Total Marks</a>
                </li>

                <!-- Profile Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="../asset/profile.png" alt="Profile Picture"> <!-- Add your profile picture source here -->
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
