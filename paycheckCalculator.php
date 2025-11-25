<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paycheck Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f7f9fc;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .hero {
            background: linear-gradient(135deg, #007bff, #00c6ff);
            color: white;
            padding: 60px 20px;
            text-align: center;
        }
        .hero h1 {
            font-size: 2.5rem;
            font-weight: bold;
        }

        footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 15px 0;
            margin-top: auto; /* Push footer to bottom */
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="index.php">My Web App</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link active" href="paycheckCalculator.php">PayCheck Calculator</a></li>
                <li class="nav-item"><a class="nav-link" href="guestbook.php">Guestbook</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<div class="hero mb-4">
    <h1>Paycheck Calculator</h1>
    <p>Calculate your weekly pay based on hours worked and hourly rate</p>
</div>

<!-- Calculator Form -->
<div class="container mb-5">
    <div class="card p-4 shadow-sm mx-auto" style="max-width: 450px;">
        <form action="paycheckResult.php" method="POST">
            <div class="mb-3">
                <label for="hours" class="form-label">Hours Worked:</label>
                <input type="number" step="0.01" class="form-control" name="hours" required>
            </div>

            <div class="mb-3">
                <label for="rate" class="form-label">Hourly Rate ($):</label>
                <input type="number" step="0.01" class="form-control" name="rate" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Calculate Pay</button>
        </form>
    </div>
</div>

<!-- Footer -->
<footer>
     2025  | All rights reserved <strong> Mileiny Nolasco </strong>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
