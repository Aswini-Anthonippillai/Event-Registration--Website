<?php
session_start();
include "../php/db.php";

$user = $_POST['username'];
$pass = $_POST['password'];

$query = "SELECT * FROM admin WHERE username='$user' AND password='$pass'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
    $_SESSION['admin'] = $user;
    header("Location: dashboard.php");
} else {
    echo "Invalid Login <br><a href='login.php'>Try Again</a>";
}
?>
