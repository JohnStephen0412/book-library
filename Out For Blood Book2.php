<?php
session_start(); // Start session to check login status

// Redirect user to login page if not logged in
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<?php 
// Include header
include('includes/header.php'); 
?>

<main class="book-background">
  <section class="book"> <!-- Book page container -->
    <div class="book-layout"> <!-- Layout wrapper for image and info -->

      <div class="book-image"> <!-- Book cover image -->
        <img src="assets/images/Out For Blood Book2.jpg" alt="Book 2 Cover">
      </div>

      <div class="book-info"> <!-- Book details section -->
        <h2>Out For Blood</h2>

        <p><strong>Author:</strong> Ryan Steck</p>

        <p><strong>Description:</strong>Set in Montana's breathtaking Big Sky Country and packed with intense, hard-hitting action, Out for Blood reaffirms Ryan Steck’s prowess in the thriller genre, demonstrating once again why his character, former Marine Raider Matthew Redd, is a force to be reckoned with."If you're looking for action, this one's coming in hot!" — Jack Carr, former Navy SEAL Sniper and #1 New York Times bestselling author of the James Reece Terminal List series
From The Real Book Spy, Ryan Steck, comes another riveting thriller full of gutsy action and nonstop mayhem (James Rollins) in the series that New York Times bestselling author Nelson DeMille describes as intense, brutal, and faster on the draw than a gunslinger.
Winters in Montana can be deadly, but it wasn’t the cold that was killing Matthew Redd…
Gavin Kline, executive assistant director of the FBI’s Intelligence Directorate, is escorting a high-value prisoner with the intel to bring down a global conspiracy when their plane comes under attack. In the aftermath, much of Kline’s team is dead, but he recovers a phone from a member of the hit team that reveals another attack is imminent. This time they’re going after the man who was instrumental in capturing the prisoner and foiling their plan: Matthew Redd.
When Redd learns he’s in the crosshairs, he sends his family into hiding and heads for the mountains. He might be outnumbered, but the hit team will have to hunt him down on his own turf. With a snowstorm bearing down on Montana and no help in sight, Redd fights for survival in the harshest conditions. But when they take the fight to his hometown, he’ll need all his allies at his back to save what he holds most dear.
A page-turning thriller set in the heart of Montana, Ryan Steck’s third action-packed Matthew Redd novel is perfect for fans of the hit show Yellowstone and readers of C. J. Box and Jack Carr.</p>

        <a href="assets/downloads/Out for Blood - Matthew Redd Thrillers, Book 3 -- Ryan Steck -- Matthew Redd Thrillers, 3, 2024 -- Tyndale House Publishers -- 9781496485946 -- 0fd0033b734c2ad8647ba7d239a374f7 -- Anna’s Archive.epub" download class="download-button">
           Download PDF <!-- Download button -->
        </a>

        <br>

        <a href="index.php" class="back-button">← Back to Library</a> <!-- Back button -->
      </div>

    </div>
  </section>
</main>

<?php 
// Include footer
include('includes/footer.php'); 
?>