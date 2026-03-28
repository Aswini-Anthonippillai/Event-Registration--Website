<?php
include "db.php";
$result = mysqli_query($conn, "SELECT * FROM registrations");
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Registrations | UniEvent</title>

    <style>
        body {
            margin: 0;
            font-family: Arial;
            background: #f4f6f9;
        }

        /* TOP BAR */
        .topbar {
            background: #002147;
            color: white;
            padding: 15px 30px;
            font-size: 20px;
        }

        /* CONTAINER */
        .container {
            width: 90%;
            margin: 30px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 12px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background: #0056b3;
            color: white;
        }

        tr:hover {
            background: #f1f5ff;
        }

        .back-btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background: #002147;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .back-btn:hover {
            background: #00162e;
        }

        .footer {
            text-align: center;
            padding: 15px;
            color: #777;
            margin-top: 20px;
        }
    </style>
</head>

<body>

<!-- TOP BAR -->
<div class="topbar">
    UniEvent – Admin | View Registrations
</div>

<!-- CONTENT -->
<div class="container">

    <h2>Student Event Registrations</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Student Name</th>
            <th>Email</th>
            <th>Department</th>
            <th>Event</th>
            <th>Registered Date</th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['student_name'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['department'] ?></td>
            <td><?= $row['event_name'] ?></td>
            <td><?= $row['created_at'] ?></td>
        </tr>
        <?php } ?>
    </table>

    <a href="../admin/dashboard.php" class="back-btn">← Back to Dashboard</a>

</div>

<div class="footer">
    © 2025 UniEvent | Admin Panel
</div>

</body>
</html>
