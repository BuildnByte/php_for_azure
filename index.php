<?php
session_start();
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Dummy login check (replace with DB query later)
    if ($username == "student" && $password == "12345") {
        $_SESSION['user'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid login. Try again.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Portal Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Student Portal - Login</h2>
    <form method="post">
        <label>Username:</label><br>
        <input type="text" name="username" required><br><br>
        
        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>
        
        <button type="submit">Login</button>
    </form>
    <?php if(isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
</body>
</html>
