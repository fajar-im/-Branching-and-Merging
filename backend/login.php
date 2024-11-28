<?php
if (isset($_POST['email']) || isset($_POST['password'])) { 
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email == 'fajar@admin.com' && $password == 'admin') {
        header('Location: ./../dashboard.php');
        exit();
    } else {
        echo 'Email atau password salah';
    }
}
?>
