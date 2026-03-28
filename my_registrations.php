<?php
include "php/db.php";

$registrations = [];
$email = "";

if (isset($_POST['email'])) {
    $email = $_POST['email'];

    $query = "SELECT * FROM registrations WHERE email='$email'";
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        $registrations[] = $row;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Registrations | UniEvent</title>
    <style>
        body {
            font-family: Arial;
            background: #f4f6f9;
        }
        .container {
            width: 80%;
            margin: 40px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        input {
            padding: 10px;
            width: 300px;
        }
        button {
            padding: 10px 15px;
            background: #0056b3;
            color: white;
            border: none;
            cursor: pointer;
        }
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: center;
        }
        th {
            background: #0056b3;
            color: white;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>My Event Registrations</h2>

    <form method="POST" style="text-align:center;">
        <input type="email" name="email" placeholder="Enter your registered email" required>
        <button type="submit">View</button>
    </form>

    <?php if (!empty($registrations)) { ?>
        <table>
            <tr>
                <th>Event Name</th>
                <th>Department</th>
                <th>Registered Date</th>
            </tr>

            <?php foreach ($registrations as $row) { ?>
                <tr>
                    <td><?= $row['event_name'] ?></td>
                    <td><?= $row['department'] ?></td>
                    <td><?= $row['created_at'] ?></td>
                </tr>
            <?php } ?>
        </table>
    <?php } elseif (isset($_POST['email'])) { ?>
        <p style="text-align:center; color:red;">No registrations found.</p>
    <?php } ?>
</div>

</body>
</html>
