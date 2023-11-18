<!DOCTYPE html>
<html>
<head>
  <title>View Doctors Data</title>
</head>
<body>

<?php
session_start();
$jsonData = file_get_contents('../../data/doctorData.json');
$phpdata = json_decode($jsonData, true);
$doctorNumber=1;
foreach ($phpdata as $data)
{
  echo '<h1>Doctor ' . $doctorNumber . ' Information</h1>';
    echo "<img src=".$data['profilePicture']." /><br>";
    echo '<p>FirstName: ' . $data['firstName'] . '</p>';
    echo '<p>LastName: ' . $data['lastName'] . '</p>';
    echo '<p>Email: ' . $data['Email'] . '</p>';
    echo '<p>Phone Number: ' . $data['Contact'] . '</p>';
    echo '<p>Gender: ' . $data['gender'] . '</p>';
    echo '<p>Address: ' . $data['HomeAddress'] . '</p>';
    $doctorNumber++;
}
?>
<p><a href="doctor_management.php">Go back.</a></p>
</body>
</html>
