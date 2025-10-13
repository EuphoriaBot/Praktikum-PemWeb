<?php
session_start();

if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
    header("Location: index.php");
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./CSS/header.css" />
    <link rel="stylesheet" href="./CSS/profile.css" />
    <link rel="stylesheet" href="./CSS/dashboard-admin.css" />
    <title>Scentify Admin Dashboard</title>
  </head>
  <body>
    <header class="header">
      <h1 class="logo">
        <img class="logo-icon" src="./icon/parfume-icon.png" />
        Scentify Admin
      </h1>
      <nav class="nav-header">
        <ul class="ul-nav-header">
          <li><a href="dashboard-admin.php">Dashboard</a></li>
          <li><a href="crud-parfum.php">Kelola Parfum</a></li>
          <li><a href="crud-user.php">Kelola User</a></li>
        </ul>
        <a href="logout.php" class="logout">Logout</a>
      </nav>
    </header>
    <div class="header-line"></div>

    <main>
      <div class="admin-dashboard">
        <h2>Selamat Datang, <?= htmlspecialchars($username); ?>!</h2>
        <p>Kelola semua data parfum dan pengguna di platform Scentify</p>
        <div class="admin-menu">
          <div class="menu-car
