<?php
session_start();
if (!isset($_SESSION['user']) || $_SESSION['user']['role'] != 'admin') {
    header("Location: ../login.php");
    exit();
}

$user = $_SESSION['user'];
$pageTitle = "Admin Dashboard";

$currentPage = isset($_GET['page']) ? $_GET['page'] : 'admin_dashboard';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Better Health - <?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="../../assets/styles/dashboard.css">
</head>

<body>
    <div class="dashboard-container">
        <?php include 'admin_sidebar.php'; ?>

        <div class="dashboard-content">
            <?php
            if (isset($_GET['page'])) {
                $page = $_GET['page'];

                if ($page === 'account_settings') {
                    include '../account_settings.php';
                } else {
                    $file = $page . '.php';
                    if (file_exists($file)) {
                        include $file;
                    } else {
                        include 'admin_dashboard.php';
                    }
                }
            } else {
                include 'admin_dashboard.php';
            }
            ?>
        </div>
    </div>
</body>

</html>