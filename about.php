<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Scentify</title>
    <link rel="stylesheet" href="./CSS/about.css" />
    <link rel="stylesheet" href="./CSS/header.css" />
    <link rel="stylesheet" href="./CSS/profile.css" />
  </head>
  <body>
    <header class="header">
      <h1 class="logo">
        <img class="logo-icon" src="./icon/parfume-icon.png" alt="logo" />
        Scentify
      </h1>
      <nav class="nav-header">
        <ul class="ul-nav-header">
          <li><a href="./dashboard.php">Home</a></li>
          <li><a href="./about.php" class="active">About</a></li>
          <li><a href="./shop.php">Shop</a></li>
        </ul>
        <a href="#" class="logout">Logout</a>
      </nav>
    </header>

    <main>
      <section class="about-hero">
        <h2>About Our Philosophy</h2>
        <p>
          Scentify is more than just a perfume shop, it is a journey to discover
          your true scent identity. Inspired by nature and people, our
          fragrances are designed to reflect individuality, authenticity, and
          timeless elegance.
        </p>
      </section>

      <section class="about-values">
        <div class="value-box">
          <img src="./image/qualityparfume.png" alt="Highest Quality" />
          <h3>Highest Quality Perfume</h3>
          <p>
            Our raw materials are sourced from around the globe to create scents
            that meet international standards.
          </p>
        </div>
        <div class="value-box">
          <img src="./image/authetication.png" alt="Authenticity" />
          <h3>Authenticity & Personalisation</h3>
          <p>
            Every fragrance is unique, just like you. Create your signature
            scent that makes heads turn.
          </p>
        </div>
        <div class="value-box">
          <img src="./image/ingredient.png" alt="Safe & Transparent" />
          <h3>Safe & Transparent</h3>
          <p>
            We believe in honesty. Our perfumes are made with transparency and
            care for both people and nature.
          </p>
        </div>
      </section>
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