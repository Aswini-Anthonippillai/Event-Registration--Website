<?php
$event = $_GET['event'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register | UniEvent</title>
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

<!-- REGISTRATION FORM -->
<div class="features">
    <h2>Event Registration</h2>

    <form action="php/save_registration.php" method="POST" 
          style="width:400px; margin:auto; background:white; padding:25px; border-radius:8px;">

        <input type="hidden" name="event_name" value="<?= $event ?>">

        <input type="text" name="student_name" placeholder="Student Name" required><br><br>

        <input type="email" name="email" placeholder="Email" required><br><br>

        <input type="text" name="index_no" placeholder="Index Number" required><br><br>

        <input type="text" name="department" placeholder="Department" required><br><br>

        <button type="submit" class="btn">Submit Registration</button>
    </form>
</div>

<!-- FOOTER -->
<div class="footer">
    <p>© 2025 UniEvent | University Event Management System</p>
</div>

</body>
</html>
