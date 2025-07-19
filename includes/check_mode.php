<?php
include_once __DIR__ . '../../config/db.php';

function isSiteLive($conn) {
    $sql = "SELECT mode FROM site_settings LIMIT 1";
    $result = $conn->query($sql);
    if ($result && $row = $result->fetch_assoc()) {
        return $row['mode'] === 'live';
    }
    return true; // Default to live
}

if (!isSiteLive($conn) && strpos($_SERVER['REQUEST_URI'], '/admin') === false) {
    header('Location: views/maintenance.php');
    exit();
}
?>
