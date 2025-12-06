<?php 
// Include header
include('includes/header.php'); 
?>

<main class="book-background">
  <div class="dashboard-container">
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['user']); ?>!</h2>     <!-- Display logged-in username safely -->
    <p>You are now logged in.</p>
    <a href="index.php" class="back-button">Go to home</a>   <!-- Link back to homepage -->
  </div>
</main>

<?php 
// Include footer
include('includes/footer.php'); 
?>