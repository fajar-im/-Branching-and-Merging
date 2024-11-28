<?php
if (isset($_POST['email']) || isset($_POST['password'])) { 
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email == 'fajar@admin.com' && $password == 'admin') {
        header('Location: ./../dashboard.php');
        exit();
    } else {
        // Menampilkan pesan error dengan Bootstrap alert
        echo '<div class="alert alert-danger" role="alert">Email atau password salah!</div>';
    }
}
?>
