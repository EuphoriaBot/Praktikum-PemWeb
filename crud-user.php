<?php
include 'koneksi.php';
session_start();

if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit();
}

if (isset($_POST['tambah'])) {
    $username = $_POST['username'];
    $password = ($_POST['password']); 
    $role = $_POST['role'];

    $sql = "INSERT INTO users (username, password, role) VALUES ('$username', '$password', '$role')";
    if ($conn->query($sql)) {
        echo "<p>User berhasil ditambahkan!</p>";
    } else {
        echo "<p>Gagal menambah user: {$conn->error}</p>";
    }
}
if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $role = $_POST['role'];
    if (!empty($_POST['password'])) {
        $password = $_POST['password'];
        $sql = "UPDATE users SET username='$username', password='$password', role='$role' WHERE id=$id";
    } else {
        $sql = "UPDATE users SET username='$username', role='$role' WHERE id=$id";
    }

    if ($conn->query($sql)) {
        echo "<p>Data user berhasil diperbarui!</p>";
    } else {
        echo "<p>Gagal update user: {$conn->error}</p>";
    }
}

// === DELETE ===
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $sql = "DELETE FROM users WHERE id=$id";
    if ($conn->query($sql)) {
        echo "<p>User berhasil dihapus!</p>";
    } else {
        echo "<p>Gagal hapus user: {$conn->error}</p>";
    }
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Kelola User</title>
<link rel="stylesheet" href="./CSS/header.css">
<link rel="stylesheet" href="./CSS/shop.css">
<style>
  .container { padding: 20px; }
  table { width: 100%; border-collapse: collapse; }
  th, td { padding: 10px; border: 1px solid #ccc; text-align: center; }
  input[type=text], input[type=password], select {
    padding: 5px;
    border-radius: 5px;
  }
</style>
</head>

<body>
<div class="container">
  <h2>Kelola Data User</h2>

  <header class="header">
      <h1 class="logo">
        <img class="logo-icon" src="./icon/parfume-icon.png" />
        Scentify
      </h1>
      <nav class="nav-header">
        <ul class="ul-nav-header">
          <li><a href="./dashboard-user.php">Home</a></li>
          <li><a href="./about.php">About</a></li>
          <li><a href="./shop.php">Shop</a></li>
        </ul>
        <a href="logout.php" class="logout">Logout</a>
      </nav>
    </header>
  <div class="header-line"></div>

  <form method="POST">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <select name="role" required>
      <option value="admin">Admin</option>
      <option value="user">User</option>
    </select>
    <button type="submit" name="tambah">Tambah User</button>
  </form>

  <br>
  <table>
    <tr>
      <th>ID</th>
      <th>Username</th>
      <th>Role</th>
      <th>Aksi</th>
    </tr>

    <?php while ($row = $result->fetch_assoc()): ?>
      <tr>
        <td><?= $row['id']; ?></td>
        <td><?= htmlspecialchars($row['username']); ?></td>
        <td><?= htmlspecialchars($row['role']); ?></td>
        <td>
          <form method="POST" style="display:inline-block;">
            <input type="hidden" name="id" value="<?= $row['id']; ?>">
            <input type="text" name="username" value="<?= htmlspecialchars($row['username']); ?>" required>
            <input type="password" name="password" placeholder="(kosongkan jika tidak diganti)">
            <select name="role">
              <option value="admin" <?= $row['role'] == 'admin' ? 'selected' : ''; ?>>Admin</option>
              <option value="user" <?= $row['role'] == 'user' ? 'selected' : ''; ?>>User</option>
            </select>
            <button type="submit" name="edit">Edit</button>
          </form>

          <a href="?hapus=<?= $row['id']; ?>" onclick="return confirm('Yakin hapus user ini?')">
            <button type="button">Hapus</button>
          </a>
        </td>
      </tr>
    <?php endwhile; ?>
  </table>
</div>
</body>
</html>
