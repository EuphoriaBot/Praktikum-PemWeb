<?php
session_start();

if (isset($_SESSION['username'])) {
    if ($_SESSION['role'] === 'admin') {
        header("Location: dashboard-admin.php"); 
    } else {
        header("Location: dashboard-user.php");
    }
    exit();
} else {
    header("Location: login.php"); 
    exit();
}
?>
