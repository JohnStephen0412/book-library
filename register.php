<?php 
// Include header layout
include('includes/header.php'); 
?>

<main class="book-background">
  <form action="register_user.php" method="post" class="login-form"> <!-- Registration form -->
    <h2>Register</h2>

    <label>Username:</label>
    <input type="text" name="username" required> <!-- Username input -->

    <label>Password:</label>
    <input type="password" name="password" required> <!-- Password input -->

    <button type="submit">Sign Up</button> <!-- Submit button -->
  </form>
</main>

<?php 
// Include footer layout
include('includes/footer.php'); 
?>