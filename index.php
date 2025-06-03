<?php
session_start();
include 'config/koneksi.php';

if (isset($_SESSION['role'])) {
    if ($_SESSION['role'] == 'admin') {
        header("Location: dashboard/index.php");
    } else {
        header("Location: dashboard/index.php");
    }
    exit;
}

if (isset($_GET['login'])) {
    $id_user = intval($_GET['login']);
    $query = mysqli_query($conn, "SELECT * FROM users WHERE id = $id_user");
    if (mysqli_num_rows($query) == 1) {
        $data = mysqli_fetch_assoc($query);
        $_SESSION['id_user'] = $data['id'];
        $_SESSION['email'] = $data['email'];
        $_SESSION['role'] = $data['role'];
        $_SESSION['id_karyawan'] = $data['id_karyawan'];

        header("Location: dashboard/index.php");
        exit;
    }
}

$userResult = mysqli_query($conn, "SELECT u.id, u.email, u.role, k.nama 
                                   FROM users u
                                   LEFT JOIN karyawan k ON u.id_karyawan = k.id_karyawan");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login via Card - karyaHub</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        .card-container {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }
        .card {
            border: 1px solid #333;
            padding: 15px;
            width: 200px;
            cursor: pointer;
            border-radius: 8px;
            box-shadow: 2px 2px 6px #ccc;
            transition: box-shadow 0.3s ease;
            text-align: center;
            text-decoration: none;
            color: inherit;
        }
        .card:hover {
            box-shadow: 4px 4px 12px #888;
        }
        .role {
            font-weight: bold;
            margin-bottom: 8px;
            color: #555;
        }
        .name {
            font-size: 1.1em;
            margin-bottom: 6px;
            color: #222;
        }
    </style>
</head>
<body>

<h2>Pilih User untuk Login</h2>
<div class="card-container">
    <?php while ($user = mysqli_fetch_assoc($userResult)) : ?>
        <a href="?login=<?= $user['id'] ?>" class="card" title="Login sebagai <?= $user['role'] ?>">
            <div class="role"><?= ucfirst($user['role']) ?></div>
            <div class="name"><?= $user['role'] == 'admin' ? $user['email'] : $user['nama'] ?></div>
            <div><?= $user['email'] ?></div>
        </a>
    <?php endwhile; ?>
</div>

</body>
</html>
