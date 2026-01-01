<?php
session_start();
if($_SESSION["usr"]==""){
    header("Location:Login.php");
    exit();
}
$usr=$_SESSION["usr"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="dashboard-container">
        <!-- Navbar -->
        <nav class="navbar">
            <div class="brand">Product Manager</div>
            <div class="nav-links">
                <span>Welcome, <strong><?php echo htmlspecialchars($usr); ?></strong></span>
                <a href="Insert.php" target="if1">Add Product</a>
                <a href="Show.php" target="if1">Manage Products</a>
                <a href="Queries.php?cs=5" style="color: var(--danger);">Log Out</a>
            </div>
        </nav>

        <!-- Main Content Area with Iframe -->
        <main class="content-area">
            <iframe name="if1" src="Welcome.php" frameborder="0"></iframe>
        </main>
    </div>
</body>
</html>