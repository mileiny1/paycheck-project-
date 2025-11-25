<?php include 'nav.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero {
            background: linear-gradient(rgba(0,123,255,0.6), rgba(0,198,255,0.6)), url('images/hero-background.jpg') no-repeat center center;
            background-size: cover;
            color: white;
            min-height: 70vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 0 20px;
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
        }

        .hero p {
            font-size: 1.3rem;
            margin-bottom: 30px;
        }

        .hero .btn {
            margin: 0 10px;
        }

        .feature-img {
            width: 50px;
            height: 50px;
            margin-right: 10px;
        }
    </style>
</head>

<body style="font-family: Arial;">

<!-- Hero Section -->
<div class="hero">
    <h1>Welcome to My Web Application</h1>
    <p>Explore my Paycheck Calculator, Guestbook, and About Me page.</p>
    <div>
        
        </a>
    </div>
</div>

<!-- Optional: Features Section -->
<div class="container mt-5 text-center">
    <h2>Features</h2>
    <p class="lead">This application demonstrates my skills in PHP, MySQL, and Bootstrap front-end design.</p>
</div>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3 mt-5">
    <p class="mb-0"> 2025  | All rights reserved <strong>Mileiny Nolasco</strong></p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
