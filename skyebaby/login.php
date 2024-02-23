<?php
// Include necessary files or initialize database connection

// Process login form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve user input
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // Validate credentials (example)
    if ($username === "admin" && $password === "password") {
        // Redirect to dashboard or perform other actions
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Invalid username or password";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if (isset($error)) : ?>
        <p><?php echo $error; ?></p>
    <?php endif; ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        <br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
