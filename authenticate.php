<?php
// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=mydatabase', $user, $password);

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Get the submitted username and password
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Check if the username and password match a record in the database
  $query = "SELECT * FROM users WHERE username = ? AND password = ?";
  $stmt = $db->prepare($query);
  $stmt->execute([$username, $password]);
  $user = $stmt->fetch();

  if ($user) {
    // Login successful
    // ... grant access to the protected resources ...
  } else {
    // Login failed
    // ... display an error message ...
  }
}
<?php
// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=mydatabase', $user, $password);

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Get the submitted username and password
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Check if the username and password match a record in the database
  $query = "SELECT * FROM users WHERE username = ? AND password = ?";
  $stmt = $db->prepare($query);
  $stmt->execute([$username, $password]);
  $user = $stmt->fetch();

  if ($user) {
    // Login successful
    // ... grant access to the protected resources ...
  } else {
    // Login failed
    // ... display an error message ...
  }
}
