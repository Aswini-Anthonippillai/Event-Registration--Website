<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

include "../php/db.php";

if (isset($_POST['add'])) {
    $title = $_POST['title'];
    $date = $_POST['date'];

    mysqli_query($conn,
        "INSERT INTO events (title, event_date)
         VALUES ('$title', '$date')"
    );
}

$events = mysqli_query($conn, "SELECT * FROM events");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Manage Events</title>
</head>
<body>

<h2>Add Event</h2>

<form method="post">
    <input type="text" name="title" placeholder="Event Title" required>
    <input type="date" name="date" required>
    <button name="add">Add Event</button>
</form>

<h3>All Events</h3>

<ul>
<?php while($e = mysqli_fetch_assoc($events)) { ?>
    <li><?= $e['title'] ?> (<?= $e['event_date'] ?>)</li>
<?php } ?>
</ul>

<p><a href="dashboard.php">Back</a></p>

</body>
</html>
