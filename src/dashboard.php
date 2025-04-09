<?php
session_start();

if (!isset($_SESSION['userType'])) {
    header("Location: passvalidator.php");
    exit();
}

$userType = $_SESSION['userType'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome to the <?php echo ucfirst($userType); ?> Dashboard</h1>
    <?php if ($userType == 'admin'): ?>
        <p>You have admin privileges</p>
    <?php else: ?>
        <p>You have user privileges</p>
    <?php endif; ?>
    
    <a href="logout.php">Logout</a>
</body>
</html>
