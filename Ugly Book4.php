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
  <section class="book"> <!-- Book page container -->
    <div class="book-layout"> <!-- Layout wrapper for image + info -->

      <div class="book-image"> <!-- Book cover image -->
        <img src="assets/images/Ugly Book4.jpg" alt="Book 4 Cover">
      </div>

      <div class="book-info"> <!-- Book details section -->
        <h2>Ugly</h2>

        <p><strong>Author:</strong> Constance Briscoe</p>

        <p><strong>Constance's mother systematically abused her daughter</strong>, both physically and emotionally, throughout her childhood. Regularly beaten and starved, the girl was so desperate she took herself off to Social Services and tried to get taken into care. When that failed, she swallowed bleach <em>'because it kills all known germs and my mother always told me I was a germ'</em>. When Constance was thirteen, her mother simply moved out, leaving her daughter to fend for herself: there was no gas, no electricity and no food.</p>

        <p>But somehow Constance found the courage to survive her terrible start in life.</em> This is her heartrending — and ultimately triumphant — story.</p>

        <a href="assets/downloads/Ugly -- Constance Briscoe -- London, England, 2008 -- London_ Hodder & Stoughton -- 9780340976609 -- 04df46ca8508d154e6e98aa699146228 -- Anna’s Archive (1).pdf" download class="download-button">
          Download PDF <!-- Download button -->
        </a>

        <br>

        <a href="index.php" class="back-button">← Back to Library