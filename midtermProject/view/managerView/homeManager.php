<?php
include '../../controller/managerControll/profile_process.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager Home Page</title>
</head>
<body>
 
    <h1>Manager Home Page</h1>
 
    <h2>Clients</h2>
    <form action="clientInformation.php" method="get">
        <input type="submit" value="Client Information">
    </form>
 
    <h2>Role Management</h2>
   
    <form action="roles.php" method="get">
        <input type="submit" value="List of Roles">
    </form>
 
    <h2>Doctors</h2>
    <form action="categories.php" method="get">
        <input type="submit" value="List of Categories">
    </form>
    <form action="doctorProfile.php" method="get">
        <input type="submit" value="Profiles">
    </form>
 
    <h2>Appointments</h2>
    <form action="bookedAppointment.php" method="get">
        <input type="submit" value="Booked Appointment"><br><br>
        <a href='../../controller/managerControll/logout_process.php' >Logout </a>
    </form>
</body>
</html>