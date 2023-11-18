<?php
include '../../controller/adminControll/profile_process.php';
?>
<!DOCTYPE html>
<head>
    <title>Profile Page</title>
</head>
<body>
<header>
        <h1>Welcome, <?php echo $_SESSION["uname"]; ?>!</h1>
        <h2>What would you like to do?</h2>
    </header>
    
    <nav>
        <ul>
            <li><a href="client_management.php">1. Client Management</a></li>
            <li><a href="doctor_management.php">2. Doctor Management</a></li>
            <li><a href="manager_management.php">3. Manager Management</a></li>
        </ul>
    </nav>
    
    <footer>
        <p><a href="../../controller/adminControll/logout_process.php">Logout</a></p>
    </footer>
</body>
</html>
