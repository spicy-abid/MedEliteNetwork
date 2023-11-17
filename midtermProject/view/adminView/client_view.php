<!DOCTYPE html>
<html>
<head>
  <title>View Patients Data</title>
</head>
<body>

<?php
$jsonData = file_get_contents('../data/patientData.json');
$phpdata = json_decode($jsonData, true);
foreach ($phpdata as $data)
{
    echo '<h1>User Information</h1>';
    echo "<img src=".$data['Image']." />";
    echo '<p>Name: ' . $data['UserName'] . '</p>';
    echo '<p>Email: ' . $data['Email'] . '</p>';
    echo '<p>Phone Number: ' . $data['Phone Number'] . '</p>';
    echo '<p>Gender: ' . $data['Gender'] . '</p>';
    echo '<p>Age: ' . $data['age'] . '</p>';
    echo '<p>Weight: ' . $data['Weight'] . '</p>';
    echo '<p>Hight: ' . $data['Hight'] . '</p>';
    echo '<p>Blood Group: ' . $data['Blood Group'] . '</p>';
    echo '<p>Address: ' . $data['Address'] . '</p>';
}
?>
<p><a href="client_management.php">Go back.</a></p>
</body>
</html>
