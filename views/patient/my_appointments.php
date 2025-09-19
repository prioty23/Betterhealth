<?php

if (!isset($_SESSION['user']) || $_SESSION['user']['role'] != 'patient') {
    header("Location: ../login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Appointments</title>
</head>
<body>
    <h1>My Appointments</h1>
    <p>Welcome back, <?php echo $user['first_name'] . " " . $user['last_name']; ?>! Here you can view and manage your appointments.</p>
</body>
</html>