<?php 
include 'config.php'; // database connection

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $message = trim($_POST['message']);

    if (!empty($name) && !empty($message)) {

        // Use prepared statements for security
        $stmt = mysqli_prepare($conn, "INSERT INTO guestbook_entries (name, message) VALUES (?, ?)");
        mysqli_stmt_bind_param($stmt, "ss", $name, $message);

        if (mysqli_stmt_execute($stmt)) {
            $success_message = "Message added successfully!";
        } else {
            $error_message = "Error inserting message.";
        }

        mysqli_stmt_close($stmt);
    } else {
        $error_message = "Please fill in all fields.";
    }
}

// Fetch all messages to display
$messages_result = mysqli_query($conn, "SELECT * FROM guestbook_entries ORDER BY id DESC"); // use id for ordering
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Submit Message</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Segoe UI', Arial, sans-serif; background: #f0f2f5; }
        .hero-small {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: white;
            padding: 60px 20px;
            text-align: center;
            border-radius: 0 0 25px 25px;
            margin-bottom: 40px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }
        .card-form, .message-card { border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); background: white; }
        footer { background-color: #343a40; color: white; text-align: center; padding: 20px 0; margin-top: 60px; }
    </style>
</head>
<body>

<div class="hero-small">
    <h1>📘 Submit Your Message</h1>
    <p>Fill in the form below to send your message to the database.</p>
</div>

<div class="container mb-5">

    <!-- Success / Error Messages -->
    <?php if (!empty($success_message)) : ?>
        <div class="alert alert-success shadow-sm"><?php echo $success_message; ?></div>
    <?php elseif (!empty($error_message)) : ?>
        <div class="alert alert-danger shadow-sm"><?php echo $error_message; ?></div>
    <?php endif; ?>

    <!-- Submission Form -->
    <div class="card card-form p-4 mb-5">
        <form method="POST">
            <div class="mb-3">
                <label class="form-label fw-bold">Your Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Message</label>
                <textarea name="message" class="form-control" placeholder="Write your message..." rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>

    <!-- Display Submitted Messages -->
    <h4 class="mb-4">All Submitted Messages</h4>
    <?php if(mysqli_num_rows($messages_result) > 0): ?>
        <div class="row g-4">
            <?php while ($row = mysqli_fetch_assoc($messages_result)): ?>
                <div class="col-md-6">
                    <div class="card message-card p-3">
                        <strong><?php echo htmlspecialchars($row['name']); ?></strong>
                        <p class="mt-2"><?php echo nl2br(htmlspecialchars($row['message'])); ?></p>
                        <?php if(isset($row['created_at'])): ?>
                            <small class="text-muted"><?php echo $row['created_at']; ?></small>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php else: ?>
        <p class="text-center text-muted">No messages have been submitted yet.</p>
    <?php endif; ?>

</div>

<footer>
    2025 | All rights reserved <strong>Mileiny Nolasco</strong>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>