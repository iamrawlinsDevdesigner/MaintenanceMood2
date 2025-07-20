<?php
include_once __DIR__ . '../../config/db.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $sql = "SELECT * FROM admins WHERE username=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $row = $result->fetch_assoc()) {
        if (hash('sha256', $password) === $row['password']) {
            $_SESSION['admin_logged_in'] = true;
            header('Location: ../views/admin/dashboard');
            exit();
        }
    }
    header('Location: ../views/admin/login.php?error=1');
    exit();
}
?>
