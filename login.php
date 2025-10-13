<?php
session_start();
include 'koneksi.php';

// if (isset($_SESSION['username'])) {
//     if ($_SESSION['role'] === 'admin') {
//         header("Location: dashboard-admin.php");
//     } else {
//         header("Location: dashboard-user.php");
//     }
//     exit();
// }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) { 
        $row = $result->fetch_assoc();
        if ($password === $row['password']) {
            $_SESSION['username'] = $username;
            if ($row['role'] == 'admin') {
                $_SESSION['role'] = 'admin';
                header("Location: dashboard-admin.php");
                exit();
            }   
                else if ($row['role'] == 'user') {
                $_SESSION['role'] = 'user';
                header("Location: dashboard-user.php");
                exit();
            } 
        } 
        else {
            $error = "Username atau password salah";
        }
    } else {
        $error = "Username atau password salah";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="./CSS/login.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>
        <form method="POST" action="">
            <label>Username:</label>
            <input type="text" name="username" required>
            
            <label>Password:</label>
            <input type="password" name="password" required>
            
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
