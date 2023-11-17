<!DOCTYPE html>
<html>
<head>
  <title>View Doctors Data</title>
</head>
<body>

<?php
$jsonData = file_get_contents('../../data/doctorData.json');
$phpdata = json_decode($jsonData, true);

foreach ($phpdata as $data) {
    echo '<h1>User Information</h1>';
    echo '<p>Name: ' . $data['UserName'] . '</p>';
    echo '<p>Email: ' . $data['Email'] . '</p>';
    echo '<p>Phone Number: ' . $data['Phone Number'] . '</p>'; 
    echo '<p>Gender: ' . $data['Gender'] . '</p>';
    echo '<p>Address: ' . $data['Address'] . '</p>';
}
?>
<p><a href="doctor_management.php">Go back.</a></p>
</body>
</html>
