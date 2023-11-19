

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>

        <h1>
            
            Patient data:
    
        </h1>
    </center>
    <h2>
    
    <a href="prescription.php">Prescreption</a>&nbsp;
    <a href="doctorProfile.php">Profile</a><br><br>

    <a href='../../controller/doctorControll/logoutProcess.php' >Logout </a>
</h2>

<?php
session_start();
include("../../controller/doctorControll/patientRecordProcess.php");
?>
</body>
</html>