<?php
include "php/db.php";

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM events WHERE id = $id");
$event = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Event Details | UniEvent</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- NAVBAR -->
<div class="navbar">
    <div class="logo">UniEvent</div>
    <div class="menu">
        <a href="index.php">Home</a>
        <a href="events.php">Events</a>
        <a href="admin/login.php">Admin</a>
    </div>
</div>

<!-- EVENT DETAILS -->
<div class="features">
    <h2><?= $event['title'] ?></h2>

    <div class="feature" style="margin: auto; width: 500px;">
        <p><strong>Description:</strong><br>
        <?= $event['description'] ?></p>

        <br>

        <p><strong>Event Date:</strong> <?= $event['event_date'] ?></p>

        <br>

        <a href="register.php?event=<?= $event['title'] ?>" class="btn">
            Register Now
        </a>
    </div>
</div>

<!-- FOOTER -->
<div class="footer">
    <p>© 2025 UniEvent | University Event Management System</p>
</div>

</body>
</html>
