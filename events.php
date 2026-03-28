<?php
include "php/db.php";

$result = mysqli_query($conn, "SELECT * FROM events ORDER BY event_date ASC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Events | UniEvent</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- NAVBAR -->
<div class="navbar">
    <div class="logo">UniEvent</div>
    <div class="menu">
        <a href="index.php">Home</a>
        <a href="events.php">Events</a>
 <a href="my_registrations.php">My Registrations</a>
        <a href="admin/login.php">Admin</a>
    </div>
</div>

<!-- PAGE TITLE -->
<div class="features">
    <h2>Upcoming University Events</h2>

    <div class="feature-box">
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <div class="feature">
                <h3><?= $row['title'] ?></h3>
                <p><?= substr($row['description'], 0, 90) ?>...</p>
                <p><strong>Date:</strong> <?= $row['event_date'] ?></p>
                <br>
                <a href="event_details.php?id=<?= $row['id'] ?>" class="btn">View Details</a>
            </div>
        <?php } ?>
    </div>
</div>

<!-- FOOTER -->
<div class="footer">
    <p>© 2025 UniEvent | University Event Management System</p>
</div>

</body>
</html>
