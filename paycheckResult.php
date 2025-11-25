<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $hours = $_POST['hours'];
    $rate = $_POST['rate'];

    if (is_numeric($hours) && is_numeric($rate)) {
        $grossPay = floatval($hours) * floatval($rate);
        $taxRate = 0.15; // 15% tax
        $tax = $grossPay * $taxRate;
        $netPay = $grossPay - $tax;
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Paycheck Result</title>
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
                .card {
                    max-width: 450px;
                    margin: 0 auto;
                    padding: 30px;
                    margin-top: -50px;
                    border-radius: 15px;
                    background: white;
                    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
                }
                footer {
                    background-color: #343a40;
                    color: white;
                    text-align: center;
                    padding: 15px 0;
                    margin-top: auto;
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
                        <li class="nav-item"><a class="nav-link active" href="paycheckCalculator.php">Pay Check Calculator</a></li>
                        <li class="nav-item"><a class="nav-link" href="guestbook.php">Guestbook</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <div class="hero mb-4">
            <h1>Paycheck Result</h1>
            <p>Here is your paycheck summary including taxes and net pay</p>
        </div>

        <!-- Paycheck Summary -->
        <div class="card text-center">
            <h3 class="mb-3">Summary</h3>
            <p><strong>Hours Worked:</strong> <?php echo htmlspecialchars(number_format($hours,2)); ?></p>
            <p><strong>Hourly Rate:</strong> $<?php echo htmlspecialchars(number_format($rate,2)); ?></p>
            <p><strong>Gross Pay:</strong> $<?php echo number_format($grossPay,2); ?></p>
            <p><strong>Tax (15%):</strong> $<?php echo number_format($tax,2); ?></p>
            <p><strong>Net Pay:</strong> $<?php echo number_format($netPay,2); ?></p>
            <a href="paycheckCalculator.php" class="btn btn-primary mt-3">Back to Calculator</a>
        </div>

        <!-- Footer -->
        <footer>
             2025  | All rights reserved <strong>Mileiny Nolasco</strong>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        </body>
        </html>
        <?php
    } else {
        echo "<p>Please enter valid numbers for hours and rate. <a href='paycheckCalculator.php'>Go Back</a></p>";
    }
} else {
    echo "<p>Invalid request. Please submit the form properly. <a href='paycheckCalculator.php'>Go Back</a></p>";
}
?>

