<?php include 'nav.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mileiny Nolasco</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f2f5;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Hero Section */
        .hero-small {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: white;
            padding: 60px 20px;
            text-align: center;
            border-radius: 0 0 25px 25px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            margin-bottom: 40px;
        }
        .hero-small h1 {
            font-size: 2.5rem;
            font-weight: bold;
        }
        .hero-small p {
            font-size: 1.2rem;
            margin-top: 10px;
        }

        /* Card */
        .about-card {
            border-radius: 20px;
            box-shadow: 0 6px 25px rgba(0,0,0,0.1);
            background: white;
            padding: 30px;
            font-size: 1.1rem;
        }

        /* Footer */
        footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 20px 0;
            margin-top: auto;
        }

        .links a {
            text-decoration: none;
            font-weight: bold;
            color: #2575fc;
        }
        .links a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

<!-- Hero Section -->
<div class="hero-small">
    <h1>Welcome to my site</h1>
    <p>Full Stack Developer</p>
</div>

<div class="container mb-5">
    <div class="about-card mx-auto shadow-sm" style="max-width: 800px;">
        <p>Hello! My name is <strong>Mileiny Nolasco</strong>. I'm a software engineer, creative thinker, and jet ski enthusiast.</p>

        <p>With three years of college-level study and a strong foundation of self-taught computer science knowledge, 
        I transitioned from my role as a Nursing Assistant to pursue a full career in tech. My journey has been driven 
        by creativity, curiosity, and a passion for building solutions that are both innovative and uniquely tailored 
        to each user's needs.</p>

        <p>This web application demonstrates my skills in:</p>
        <ul>
            <li>PHP Programming</li>
            <li>PostgreSQL / MySQL Database Development</li>
            <li>Bootstrap for Responsive Web Design</li>
            <li>Full-Stack Web Application Development</li>
        </ul>

        <div class="links mt-4">
            <p><strong>Portfolio:</strong> <a href="https://myportfolios2.vercel.app" target="_blank">View Portfolio</a></p>
            <p><strong>GitHub:</strong> <a href="https://github.com/mileiny1" target="_blank">github.com/mileiny1</a></p>
        </div>

        <p class="mt-3">Thank you for exploring my application. I hope you enjoy the experience!</p>
    </div>
</div>

<!-- Footer -->
<footer>
2025 | All rights reserved <strong>Mileiny Nolasco</strong>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
