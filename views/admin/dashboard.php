<?php
include_once '../../includes/auth_check.php';
include_once '../../config/db.php';
include_once '../../includes/check_mode.php';

$result = $conn->query("SELECT mode FROM site_settings LIMIT 1");
$currentMode = $result->fetch_assoc()['mode'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>
    <h1>Admin Dashboard</h1>
    <p>Current Mode: <strong><?php echo strtoupper($currentMode); ?></strong></p>

    <form action="../../controllers/ModeController.php" method="POST">
        <label>
            <input type="radio" name="mode" value="live" <?php if ($currentMode == 'live') echo 'checked'; ?>>
            Live Mode
        </label>
        <label>
            <input type="radio" name="mode" value="maintenance" <?php if ($currentMode == 'maintenance') echo 'checked'; ?>>
            Maintenance Mode
        </label>
        <button type="submit">Update Mode</button>
    </form>

    <p><a href="logout.php">Logout</a></p>
</body>
</html>
