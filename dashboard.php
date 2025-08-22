<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION['user']; ?> 🎓</h2>
    <p>This is your student dashboard.</p>

    <ul>
        <li>📘 Courses: Web Development, AI, OS</li>
        <li>📅 Attendance: 92%</li>
        <li>⏰ Next Class: Monday 10 AM</li>
    </ul>

    <a href="logout.php">Logout</a>
</body>
</html>
