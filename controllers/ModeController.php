<?php
include_once '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mode = $_POST['mode'];
    $sql = "UPDATE site_settings SET mode=? WHERE id=1";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $mode);
    if ($stmt->execute()) {
        header('Location: ../views/admin/dashboard.php?success=1');
    } else {
        header('Location: ../views/admin/dashboard.php?error=1');
    }
    exit();
}
?>
