<?php
include 'db.php';
include 'includes/functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = sanitize($_POST['name']);
    $email = sanitize($_POST['email']);
    $password = sanitize($_POST['password']); // No hashing

    // Prepare the statement
    $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }
    
    // Bind parameters
    $stmt->bind_param("sss", $name, $email, $password);

    // Execute the statement and check for errors
    if ($stmt->execute()) {
        header("Location: login.php"); // Redirect to login after successful registration
        exit();
    } else {
        $error = "Registration failed: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the connection (optional but recommended)
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Register</button>
        <?php if (isset($error)) echo "<p>$error</p>"; ?>
    </form>
</body>
</html>
