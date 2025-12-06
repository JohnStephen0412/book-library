<?php 
// Include header
include('includes/header.php'); 
?>

<main class="book-background">
  <form action="authenticate.php" method="post" class="login-form"> <!-- Login form -->
    <h2>Login</h2>

    <label>Username:</label>
    <input type="text" name="username" required> 

    <label>Password:</label>
    <input type="password" name="password" required> 

    <button type="submit">Login</button> 

    <p style="margin-top: 1em; text-align: center;">
      Don't have an account? <a href="register.php">Register here</a>
    </p>
  </form>
</main>

<?php 
// Include footer
include('includes/footer.php'); 
?>