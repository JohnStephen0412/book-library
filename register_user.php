<?php
// database connection settings
$host = "sql110.infinityfree.com";
$dbuser = "if0_40572301";
$dbpass = "iIabZ4rnWwK";
$dbname = "if0_40572301_mywebsite"; 

// Create database connection
$conn = new mysqli($host, $dbuser, $dbpass, $dbname);

// Stop execution if connection fails
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get submitted form data
$username = $_POST['username'];
$password = $_POST['password'];

// Hash the password for secure storage
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Check if username already exists
$sql = "SELECT id FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->store_result();

// If username is taken
if ($stmt->num_rows > 0) {
  echo "❌ Username already taken.";

} else {
  // Insert new user into database
  $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
  $stmt->bind_param("ss", $username, $hashedPassword);

  if ($stmt->execute()) {
    echo "✅ Registration successful. <a href='login.php'>Login here</a>";
  } else {
    echo "❌ Error: " . $stmt->error;
  }
}

// Close database connection
$conn->close();
?>