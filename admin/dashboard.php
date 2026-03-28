<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

include "../php/db.php";

/* Total registrations */
$reg = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT COUNT(*) AS total FROM registrations")
);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>

<h2>Admin Dashboard</h2>

<p><b>Total Registrations:</b> <?= $reg['total'] ?></p>

<p>
    <a href="view_registrations.php">View All Registrations</a> |
    <a href="manage_events.php">Manage Events</a> |
    <a href="logout.php">Logout</a>
</p>

</body>
</html>
