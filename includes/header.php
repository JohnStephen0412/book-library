<?php
// Start session if it hasn't been started yet
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Book Library</title>
  <link rel="stylesheet" href="assets/css/style.css"> <!-- Main stylesheet -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Responsive layout -->
</head>
<body>

<header> 
  <h1>📚 Book Library</h1>

  <nav> <!-- Navigation menu -->
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="contact.php">Contact</a>
    <a href="The Idiot Book1.php">The Idiot</a>
    <a href="Out For Blood Book2.php">Out For Blood</a>
    <a href="The Assignment Book3.php">The Assignment</a>
    <a href="Ugly Book4.php">Ugly</a>
    <a href="Atomic Habits Book5.php">Atomic Habits</a>

    <?php if (isset($_SESSION['user'])): ?>
      <a href="dashboard.php">Logged in as <?php echo htmlspecialchars($_SESSION['user']); ?></a> <!-- Show logged-in user -->
      <a href="logout.php">Logout</a> <!-- Logout link -->
    <?php else: ?>
      <a href="login.php">Login</a> <!-- Login link -->
      <a href="register.php">Register</a> <!-- Registration link -->
    <?php endif; ?>
  </nav>
</header>