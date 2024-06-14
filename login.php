<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $file = fopen("/job/WelcomeApps/ws/users.txt", "r");
    $validUser = false;

    while (($line = fgets($file)) !== false) {
        list($storedUser, $storedPass) = explode(",", trim($line));
        if ($username == $storedUser && $password == $storedPass) {
            $validUser = true;
            break;
        }
    }
    fclose($file);

    if ($validUser) {
        $_SESSION['username'] = $username;
        header("Location: welcome.php");
        exit();
    } else {
        echo "Invalid credentials.";
    }
}
?>
