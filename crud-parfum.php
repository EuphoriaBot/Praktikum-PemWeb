<?php
include 'koneksi.php';
session_start();

if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit();
}

// === CREATE ===
if (isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];

    $sql = "INSERT INTO parfume (nama, harga) VALUES ('$nama', '$harga')";
    if ($conn->query($sql)) {
        echo "<p>✅ Data berhasil ditambahkan!</p>";
    } else {
        echo "<p>❌ Gagal menambah data: {$conn->error}</p>";
    }
}

// === UPDATE ===
if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];

    $sql = "UPDATE parfume SET nama='$nama', harga='$harga' WHERE id=$id";
    if ($conn->query($sql)) {
        echo "<p>✅ Data berhasil diperbarui!</p>";
    } else {
        echo "<p>❌ Gagal update data: {$conn->error}</p>";
    }
}

// === DELETE ===
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];

    $sql = "DELETE FROM parfume WHERE id=$id";
    if ($conn->query($sql)) {
        echo "<p>✅ Data berhasil dihapus!</p>";
    } else {
        echo "<p>❌ Gagal hapus data: {$conn->error}</p>";
    }
}

// === READ ===
$sql = "SELECT * FROM parfume";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Kelola Parfum</title>
<link rel="stylesheet" href="./CSS/header.css">
<link rel="stylesheet" href="./CSS/shop.css">
</head>

<body>
<div class="container">
  <h2>Kelola Data Parfum</h2>

  <form method="POST">
    <input type="text" name="nama" placeholder="Nama Parfum" required>
    <input type="number" name="harga" placeholder="Harga Parfum" required>
    <button type="submit" name="tambah">Tambah</button>
  </form>

  <table>
    <tr>
      <th>ID</th>
      <th>Nama Parfum</th>
      <th>Harga (IDR)</th>
      <th>Aksi</th>
    </tr>

    <?php while ($row = $result->fetch_assoc()): ?>
      <tr>
        <td><?= $row['id']; ?></td>
        <td><?= htmlspecialchars($row['nama']); ?></td>
        <td><?= $row['harga']; ?></td>
        <td>
          <form method="POST" style="display:inline-block;">
            <input type="hidden" name="id" value="<?= $row['id']; ?>">
            <input type="text" name="nama" value="<?= htmlspecialchars($row['nama']); ?>" required>
            <input type="number" name="harga" value="<?= $row['harga']; ?>" required>
            <button type="submit" name="edit">Edit</button>
          </form>

          <a href="?hapus=<?= $row['id']; ?>" onclick="return confirm('Yakin hapus parfum ini?')">
            <button type="button">Hapus</button>
          </a>
        </td>
      </tr>
    <?php endwhile; ?>
  </table>
</div>
</body>
</html>
