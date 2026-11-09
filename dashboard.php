<?php
require_once "config.php";

if (!isset($_SESSION["user_id"])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PZWORKZ</title>
</head>
<body>
    <h1>PCWORKZ</h1>
    <h2>Dashboard</h2>
    <p>Welcome, <?= htmlspecialchars($_SESSION["username"]) ?> (<?= htmlspecialchars($_SESSION["role"]) ?>)</p>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>
