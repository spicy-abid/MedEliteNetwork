<!DOCTYPE html>
<html>
<head>
  <title>View Doctors Data</title>
</head>
<body>

<?php
$jsonData = file_get_contents('../../data/doctorData.json');
$phpdata = json_decode($jsonData, true);

foreach ($phpdata as $data)
{
    echo '<h1>User Information</h1>';
    echo "<img src=".$data['profilePicture']." /><br>";
    echo '<p>FirstName: ' . $data['firstName'] . '</p>';
    echo '<p>LastName: ' . $data['lastName'] . '</p>';
    echo '<p>Email: ' . $data['Email'] . '</p>';
    echo '<p>Phone Number: ' . $data['Contact'] . '</p>';
    echo '<p>Gender: ' . $data['gender'] . '</p>';
    echo '<p>Address: ' . $data['HomeAddress'] . '</p>';
}
?>
<p><a href="doctor_management.php">Go back.</a></p>
</body>
</html>
