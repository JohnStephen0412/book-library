<?php
session_start(); // Start session to check login status

// Redirect user to login page if not logged in
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<?php 
// Includes the header section of the website
include('includes/header.php'); 
?>

<main class="book-background">
  <section class="book">
    <div class="book-layout">
      <div class="book-image">
        <img src="assets/images/Atomic Habits Book5.jpg" alt="Book 5 Cover">
      </div>
      <div class="book-info">
        <h2>Atomic Habits</h2>
        <p><strong>Author:</strong> James Clear</p>
        <p><strong>Description:</strong> No matter your goals, Atomic Habits offers a proven framework for improving every day. James Clear, one of the world's leading experts on habit formation, reveals practical strategies that will teach you exactly how to form good habits, break bad ones, and master the tiny behaviors that lead to remarkable results.</p>
        <a href="assets/downloads/Atomic Habits by James Clear -- James Clear -- c9ab03b8cb5702c9a1ed1d14273fb77c -- Anna’s Archive.pdf" download class="download-button">Download PDF</a>
        <br>
        <a href="index.php" class="back-button">← Back to Library</a>
      </div>
    </div>
  </section>
</main>

<?php 
// Includes the footer section of the website
include('includes/footer.php'); 
?>