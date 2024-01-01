<?php
session_start();
include("../../controller/doctorControll/patientRecordProcess.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="../../css/patientRStyle.css">
            
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../../js/myscript.js"></script>
</head>
<body>
    <center>
        <h1>
            Patient data:
        </h1>
    </center>
    <h2>
        <a href="doctorProfile.php">Profile</a>&nbsp;
        <a href="prescription.php">Prescription</a><br><br>
        
    </h2>
    <fieldset>
                        <label for="fname">Search PatientID:</label><br>
                        <input type="text" name="fname" id="fname" onkeyup="viewPatient()"> <?php echo $ferror ?><br>
                        <p id="result"></p>
                     
                    </fieldset>

    <div id="searchResults"></div>
    <?php
    if (!empty($dataError)) {
        echo $dataError . "<br>";
    } else {
        echo '<table border="1">';
        echo '<tr>
                <th>Patient ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>Weight</th>
                <th>Contact</th>
                <th>Gender</th>
                <th>Previous Prescription</th>
                
                
              </tr>';
        
        foreach ($result as $data) {
            echo '<tr>';
            echo '<td>' . $data['patientID'] . '</td>';
            echo '<td>' . $data['firstName'] . '</td>';
            echo '<td>' . $data['lastName'] . '</td>';
            echo '<td>' . $data['Age'] . '</td>';
            echo '<td>' . $data['Weight'] . '</td>';
            echo '<td>' . $data['contact'] . '</td>';
            echo '<td>' . $data['gender'] . '</td>';
            echo '<td>' . $data['previousPrescription'] . '</td>';
            // echo '<td>' . $data['message'] . '</td>';
            // echo '<td><button onclick="deletePatient('.$data['patientID'].')">Delete</button></td>';
            
            echo '</tr>';
        }
        
        echo '</table>';
        
    }
    ?>
    <h2>

        <a href='../../controller/doctorControll/logoutProcess.php'>Logout</a>
    </h2>
</body>
</html>
