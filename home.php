<?php
session_start(); // ???? ????
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // ????? ?? ???? ???? ?? ???? ??? ????
    exit();
}
?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home page</title>
    <link rel="stylesheet" href="style.css"> <!-- ???? ?? ???? CSS -->
</head>
<body>
    <div class="container">
        <h1>welcome <?php echo htmlspecialchars($_SESSION['username']); ?></h1>
        <button type="submit"><a href="logout.php">log out</button>
    </div>
</body>
</html>
