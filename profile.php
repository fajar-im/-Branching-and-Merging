<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: backend/login.php');
    exit();
}

echo "Selamat datang, " . $_SESSION['username'];
echo "<a href='logout.php'>Logout</a>";
?>
