<?php
// Menyertakan koneksi database
include('../config/db.php');

if (isset($_POST['email']) || isset($_POST['password'])) { 
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Redirect ke halaman dashboard jika login berhasil
        header('Location: ./../dashboard.php');
        exit();
    } else {
        // Tampilkan pesan error jika login gagal
        echo '<div class="alert alert-danger" role="alert">Email atau password salah!</div>';
    }
}
?>
