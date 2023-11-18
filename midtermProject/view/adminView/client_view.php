<!DOCTYPE html>
<html>
<head>
  <title>View Patients Data</title>
</head>
<body>

<?php
session_start();
// include("../../controller/patientControll/profileProcess.php");
$jsonData = file_get_contents('../../data/patientData.json');
$phpdata = json_decode($jsonData, true);
$patientNumber=1;

  foreach ($phpdata as $data)
{
  echo '<h1>Patient ' . $patientNumber . ' Information</h1>';
    // echo "<img src=".$patientProfilepic.">";
    echo '<p>Name: ' . $data['UserName'] . '</p>';
    echo '<p>Email: ' . $data['Email'] . '</p>';
    echo '<p>Phone Number: ' . $data['Phone Number'] . '</p>';
    echo '<p>Gender: ' . $data['Gender'] . '</p>';
    echo '<p>Age: ' . $data['age'] . '</p>';
    echo '<p>Weight: ' . $data['Weight'] . '</p>';
    echo '<p>Hight: ' . $data['Hight'] . '</p>';
    echo '<p>Blood Group: ' . $data['Blood Group'] . '</p>';
    echo '<p>Address: ' . $data['Address'] . '</p>';
    $patientNumber++;
}

?>
<p><a href="client_management.php">Go back.</a></p>
</body>
</html>
