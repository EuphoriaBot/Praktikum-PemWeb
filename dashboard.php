<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

$username = $_SESSION['username']; 

if (isset($_GET['menu'])) {
    echo "<p>Menu yang dipilih: " . htmlspecialchars($_GET['menu']) . "</p>";
}
?>

<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./CSS/header.css" />
    <link rel="stylesheet" href="./CSS/profile.css" />
    <title>Scentify</title>
  </head>
  <body>
    <header class="header">
      <h1 class="logo">
        <img class="logo-icon" src="./icon/parfume-icon.png" />
        Scentify
      </h1>
      <nav class="nav-header">
        <ul class="ul-nav-header">
          <li><a href="./dashboard.php">Home</a></li>
          <li><a href="./about.php">About</a></li>
          <li><a href="./shop.php">Shop</a></li>
        </ul>
        <a href="logout.php" class="logout">Logout</a>
      </nav>
    </header>
    <div class="header-line"></div>

    <main>
      <div class="profile">
        <div class="about-us">
          <div>
            <h2>About Us</h2>
            <p>
              Scentify is a fragrance destination that brings together a wide
              selection of perfumes from various creators and brands. We aim to
              provide a place where everyone can discover the scent that truly
              reflects their personality.
            </p>
          </div>
          <div>
            <h2>Fragrance Philosphy</h2>
            <p>
              We believe every fragrance tells a story. From timeless classics
              to modern blends, each creation offers a unique expression, giving
              you the freedom to choose the perfect scent for any moment.
            </p>
          </div>
          <div>
            <h2>Our Commitmentd</h2>
            <p>
              At Scentify, we are committed to offering only authentic and
              high-quality perfumes, with a carefully curated selection that
              ensures every choice is meaningful and memorable.
            </p>
          </div>
        </div>
        <div>
          <img
            class="perfume-profile"
            src="./image/profile-parfume.png"
            alt=""
          />
        </div>
      </div>
    </main>

    <footer class="footer">
      <div class="footer-container">
        <div class="footer-section">
          <h3>About Scentify</h3>
          <p>
            Scentify is dedicated to bring the highest quality, safe, and
            natural perfume to you, with people first mindset.
            <a href="#">Learn more about us</a>
          </p>
          <div class="social-icons">
            <img src="./icon/facebook-icon.png" alt="" />
            <img src="./icon/instagram-icon.png" alt="" />
          </div>
        </div>

        <div class="footer-section">
          <h3>Help & FAQs</h3>
          <ul>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Return & Exchange</a></li>
            <li><a href="#">Terms</a></li>
            <li><a href="#">Privacy Policy</a></li>
          </ul>
        </div>

        <div class="footer-section">
          <h3>Wanna be Pen pals?</h3>
          <p>
            Subscribe and join the Scentify Crew to receive updates, access to
            exclusive deals, and more.
          </p>
          <form class="subscribe-form">
            <input type="email" placeholder="Enter your email address" />
            <button type="submit">Subscribe</button>
          </form>
        </div>
      </div>
    </footer>
    <script src="./Script/script.js"></script>
  </body>
</html>
