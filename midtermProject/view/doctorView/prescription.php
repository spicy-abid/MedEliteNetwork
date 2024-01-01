<?php
session_start();
include("../../controller/doctorControll/prescriptionProcess.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="../../css/patientRStyle.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>
        <a href="doctorProfile.php">Profile</a>&nbsp;
        <a href="patientRecord.php">Patient Record</a><br><br>
        <a href='../../controller/doctorControll/logoutProcess.php' >Logout </a>

    </h2><br>
    <form action="" method="POST">
        PatientId<input type="text" name="uname" <?php echo $userE; ?>>
        <!-- <input type="submit" name="search" value="Search" id="Search"> --><br>
        Write the medicine here<br>
        <textarea name="prescription" id="" cols="30" rows="10"></textarea><br>
        <input type="submit" name="prescribe" value="Prescribe" id="prescribe">
        <input type="reset" name="clear" value="Clear" id="clear">
        <?php echo $presE; ?>
       <br>
       
       
    </form>
</body>
</html>