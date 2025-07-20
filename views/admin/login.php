<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>
    <h1>Admin Login</h1>
    <?php if (isset($_GET['error'])): ?>
        <p style="color:red;">Invalid credentials. Try again.</p>
    <?php endif; ?>
    <form action="../../controllers/AuthController.php" method="POST">
        <input type="text" name="username" placeholder="Username" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <button type="submit" id="loginBtn" class="btn">
    <span id="btnText">Login</span>
    <span id="btnSpinner" class="spinner hidden"></span>
</button>

    </form>
     <script src=" ../../assets/js/script.js"></script>
</body>
</html>
