<!DOCTYPE html>
<html>
<head>
  <title>View Managers Data</title>
</head>
<body>

<?php
$jsonData = file_get_contents('../data/data.json');
$phpdata = json_decode($jsonData, true);

foreach ($phpdata as $data) {
  echo '<h1>User Information</h1>';
  echo '<p>Name: ' . $data['FirstName'] . '</p>';
  echo '<p>Email: ' . $data['Email'] . '</p>';
  echo '<p>HomeAddress: ' . $data['HomeAddress'] . '</p>';
  echo '<p>Contact: ' . $data['Contact'] . '</p>';
  echo '<p>Gender: ' . $data['Gender'] . '</p>';
}
?>
<p><a href="manager_management.php">Go back.</a></p>
</body>
</html>
