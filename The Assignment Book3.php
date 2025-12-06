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
    <div class="book-layout"> <!-- Layout wrapper for image and info -->

      <div class="book-image"> <!-- Book cover image -->
        <img src="assets/images/The Assignment.jpg" alt="Book 3 Cover">
      </div>

      <div class="book-info"> <!-- Book details section -->
        <h2>The Assignment</h2>

        <p><strong>Author:</strong> Liza Weimer</p>

        <p><strong>Description:</strong> In the vein of the classic <em>The Wave</em> and inspired by a real-life incident, this riveting novel explores discrimination and antisemitism and reveals their dangerous impact.<br><br>
        <strong>SENIOR YEAR.</strong> When an assignment given by a favorite teacher instructs a group of students to argue for the Final Solution—a euphemism used to describe the Nazi plan for the genocide of the Jewish people—Logan March and Cade Crawford are horrified. Their teacher cannot seriously expect anyone to complete an assignment that fuels intolerance and discrimination. Logan and Cade decide they must take a stand.<br><br>
        As the school administration addresses the teens' refusal to participate in the appalling debate, the student body, their parents, and the larger community are forced to face the issue as well. The situation explodes, and acrimony and anger result. What does it take for tolerance, justice, and love to prevail?</p>

        <a href="assets/downloads/The Assignment -- Liza M_ Wiemer -- Penguin Random House LLC, New York, 2020 -- Random House Children's Books -- 9780593123164 -- 3f4444aef6544579bb94656567427e90 -- Anna’s Archive.epub" download class="download-button">
          Download PDF <!-- Download button -->
        </a>

        <br>

        <a href="index.php" class="back-button">← Back to Library</a> <!-- Back button -->
      </div>

    </div>
  </section>
</main>

<?php 
// Include footer layout
include('includes/footer.php'); 
?>