<?php
session_start(); // Start session to check login status

// Redirect user to login page if not logged in
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<?php 
// Include header layout
include('includes/header.php'); 
?>

<main class="book-background">
  <section class="intro"> <!-- Intro section -->
    <h2>Welcome to My Book Library</h2>
  </section>

  <section class="featured-books"> <!-- Library section -->
    <h3>📚 Library 📚</h3>

    <div class="book-grid"> 

      <a href="The Idiot Book1.php" class="book-card"> 
        <img src="assets/images/The Idiot Book1.jpg" alt="Book 1">
        <p>The Idiot</p>
      </a>

      <a href="Out For Blood Book2.php" class="book-card"> 
        <img src="assets/images/Out For Blood Book2.jpg" alt="Book 2">
        <p>Out For Blood</p>
      </a>

      <a href="The Assignment Book3.php" class="book-card"> 
        <img src="assets/images/The Assignment.jpg" alt="Book 3">
        <p>The Assignment</p>
      </a>

      <a href="Ugly Book4.php" class="book-card"> 
        <img src="assets/images/Ugly Book4.jpg" alt="Book 4">
        <p>Ugly</p>
      </a>

      <a href="Atomic Habits Book5.php" class="book-card"> 
        <img src="assets/images/Atomic Habits Book5.jpg" alt="Book 5">
        <p>Atomic Habits</p>
      </a>

    </div>
  </section>
</main>

<?php 
// Include footer layout
include('includes/footer.php'); 
?>