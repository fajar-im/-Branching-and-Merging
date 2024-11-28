<?php
include('../config/db.php');

// Query untuk mendapatkan semua data pengguna
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Data Pengguna</h1>
        <a href="create.php" class="btn btn-success mb-3">Tambah Pengguna</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Tampilkan data pengguna
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row["id"] . "</td>
                                <td>" . $row["email"] . "</td>
                                <td>
                                    <a href='edit.php?id=" . $row["id"] . "' class='btn btn-warning btn-sm'>Edit</a>
                                    <a href='delete.php?id=" . $row["id"] . "' class='btn btn-danger btn-sm'>Delete</a>
                                </td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>Tidak ada data.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
