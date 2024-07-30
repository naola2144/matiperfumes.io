<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "matiperfume";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Admin credentials
$admin_username = "mati";
$admin_password = "mati2144";
$hashed_password = password_hash($admin_password, PASSWORD_DEFAULT);

// Insert admin user
$sql = "INSERT INTO admins (username, password) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $admin_username, $hashed_password);



$stmt->close();
$conn->close();
?>

<?php
session_start();

// Database connection settings
$servername = "localhost";   // Your database server
$username = "root";          // Your database username
$password = "";              // Your database password
$dbname = "matiperfume";  // Your database name

// Create a new connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user input
$input_username = $_POST['username'];
$input_password = $_POST['password'];

// Prepare and execute the SQL query
$sql = "SELECT * FROM admins WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $input_username);
$stmt->execute();
$result = $stmt->get_result();

// Check if the username exists and the password matches
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    
    // Verify password
    if (password_verify($input_password, $row['password'])) {
        // Successful login
        $_SESSION['admin'] = $input_username;
        header("Location: includes/header.php");  // Redirect to admin dashboard
        exit();
    } else {
        // Invalid password
        echo "Invalid username or password.";
    }
} else {
    // Username does not exist
    echo "Invalid username or password.";
}

$stmt->close();
$conn->close();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="login-container">
        <h2>Admin Login</h2>
        <form action="admin_login.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>