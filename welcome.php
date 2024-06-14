<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: WelcomeApps/ws/index.html");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
    <p>You have successfully logged in.</p>
</body>
</html>
