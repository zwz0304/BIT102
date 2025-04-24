<?php
session_start();

$correctPassword = "1234"; // 你可以修改成自己的密码

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $password = $_POST["password"] ?? "";
    if ($password === $correctPassword) {
        $_SESSION["admin_logged_in"] = true;
        header("Location: admin.php");
        exit;
    } else {
        $error = "Incorrect password.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <style>
        body { font-family: Arial; text-align: center; padding-top: 100px; background: #f4f4f4; }
        form { background: white; display: inline-block; padding: 30px; border-radius: 8px; box-shadow: 0 0 10px #aaa; }
        input { padding: 10px; width: 200px; margin-bottom: 10px; }
        button { padding: 10px 20px; background: #444; color: white; border: none; border-radius: 5px; }
        .error { color: red; }
    </style>
</head>
<body>
    <form method="POST">
        <h2>Admin Login</h2>
        <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
        <input type="password" name="password" placeholder="Enter password" required><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
