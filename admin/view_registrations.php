<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

include "../php/db.php";
$result = mysqli_query($conn, "SELECT * FROM registrations");
?>
<!DOCTYPE html>
<html>
<head>
    <title>All Registrations</title>
</head>
<body>

<h2>Student Registrations</h2>

<table border="1" cellpadding="8">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Department</th>
    <th>Event</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['student_name'] ?></td>
    <td><?= $row['email'] ?></td>
    <td><?= $row['department'] ?></td>
    <td><?= $row['event_name'] ?></td>
</tr>
<?php } ?>

</table>

<p><a href="dashboard.php">Back</a></p>

</body>
</html>
