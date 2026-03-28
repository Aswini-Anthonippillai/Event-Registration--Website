<?php
include "db.php";

$name  = $_POST['student_name'];
$email = $_POST['email'];
$index = $_POST['index_no'];
$dept  = $_POST['department'];
$event = $_POST['event_name'];

$sql = "INSERT INTO registrations
(student_name, email, index_no, department, event_name)
VALUES ('$name', '$email', '$index', '$dept', '$event')";

if (mysqli_query($conn, $sql)) {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Success | UniEvent</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<div style="
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:linear-gradient(135deg, #f5f7fa, #c3cfe2);
">

    <div style="
        background:white;
        padding:40px;
        border-radius:10px;
        text-align:center;
        box-shadow:0 0 15px rgba(0,0,0,0.2);
        width:350px;
    ">
        <h2 style="color:#002147;">🎉 Registration Successful!</h2>
        <p style="margin:20px 0;">
            You have successfully registered for<br>
            <strong><?= $event ?></strong>
        </p>

        <a href="../events.php" class="btn">Back to Events</a>
    </div>

</div>

</body>
</html>
<?php
} else {
    echo "Error!";
}
?>
