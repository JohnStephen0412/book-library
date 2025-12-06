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

<main class="about-page">
  <section class="about">
    <h2>About This Website</h2>

    <p>Welcome to my personal book library! My name is John Stephen, a year 2 Information Technology student who occasionally likes to read and share books that inspire, challenge, and entertain. This site is a personnal collection of titles I personally enjoyed reading or found interesting.</p>

    <p>Each book has its own page with a description and a download link.</p>

    <p>Feel free to explore, download, and enjoy the collection.</p>
  </section>
</main>

<?php 
// Includes the footer section of the website
include('includes/footer.php'); 
?>