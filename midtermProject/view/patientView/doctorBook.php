<?Php
include "../../controller/patientControll/Book_process.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Doctor Booking</title>
</head>
<body>
    <h2 align="center">Book Doctor</h2>
    
    <form action="" method="post">
        <label for="docName">Doctor's Name:</label>
        <input type="text" name="docName"><?php echo $docError ?><br>

        <label for="patientname">Patient's Name:</label>
        <input type="text" name="patientName"><?php echo $patientError ?><br>

        <button type="submit" name="book">Submit</button>
        <p><a href="Profile.php">Go back</a></p>
    </form>
</body>
</html>
