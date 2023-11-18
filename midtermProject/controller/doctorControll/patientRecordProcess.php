<?php

$jsonData = file_get_contents('../../data/patientData.json');
$phpdata = json_decode($jsonData, true);
$patientNumber=1;
foreach ($phpdata as $data)
{
  echo '<h1>Patient&nbsp; ' . $patientNumber . ' Information</h1>';
    
    echo "<p>PatientID: " . $data['UserName'] . "</p>";
    echo '<p>FirstName: ' . $data['First name'] . '</p>';
    echo '<p>LastName: ' . $data['lastname'] . '</p>';
    echo '<p>Age: ' . $data['age'] . '</p>';
    echo '<p>Weight: ' . $data['Weight'] . '</p>';
    echo '<p>Phone Number: ' . $data['Phone Number'] . '</p>';
    echo '<p>Gender: ' . $data['Gender'] . '</p>';
    echo '<p>Previous Prescription&nbsp;: ' . $data['prescription'] . '</p>';
    $patientNumber++;
}
?>