<?php
session_start(); // Start session for login tracking

// Database connection settings
$host = "sql110.infinityfree.com";
$dbuser = "if0_40572301";
$dbpass = "iIabZ4rnWwK";
$dbname = "if0_40572301_mywebsite"; 

// Create database connection
$conn = new mysqli($host, $dbuser, $dbpass, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error); // Stop if connection fails
}

// Get submitted username and password
$username = $_POST['username'];
$password = $_POST['password'];

// Prepare SQL query to find user
$sql = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

// Check if user exists
if ($user = $result->fetch_assoc()) {

  // Verify password
  if (password_verify($password, $user['password'])) {

    // Store username in session and redirect
    $_SESSION['user'] = $user['username'];
    header("Location: dashboard.php");
    exit();

  } else {
    echo "❌ Incorrect password."; // Wrong password
  }

} else {
  echo "❌ User not found."; // Username not in database
}

$conn->close(); // Close database connection
?>