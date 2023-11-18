<?php
include("../../controller/managerControll/doctorProfileProcess.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
if(isset($_POST["update"]) && $_POST["status"]=="None")
{
    echo "dont submit empty value";
}
else
{
    $doctorName = $license = $status = null;

}
$phpdata = json_decode(file_get_contents("../../data/doctorData.json"), true);


function updateDoctorProfile($newLicense, $newStatus) {
    $jsonFilePath = "../../data/doctorData.json";
    $jsondata = json_decode(file_get_contents($jsonFilePath), true);

    foreach ($jsondata as &$doctor) {
        // Check if the license matches
        if ($doctor['License'] == $newLicense) {
            // Update the status
            $doctor['status'] = $newStatus;

            // Save the updated data back to the JSON file
            file_put_contents($jsonFilePath, json_encode($jsondata, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
            
            // Output a success message or perform any other actions if needed
            echo "Status updated successfully.";
            return;
        }
    }

    // If the function reaches here, it means no matching license was found
    echo "License not found. Status not updated.";
}



foreach ($phpdata as $data) {
    $doctorName = $data['firstName'] . "&nbsp;" . $data['lastName'];
    $license = $data['License'];
    $status = $data['status'];
    echo "<br>";
    echo $doctorName . "&nbsp;";
    echo $status . "&nbsp;";
    echo $license . "&nbsp;";
    echo "<br>";
}

// Check if the form is submitted
if (isset($_POST['change']) && $_POST["status"]!="None") {
    $newLicense = $_POST['license'];
    $newStatus = $_POST['status'];

    // Update the license and status in the process file
    include("../../controller/managerControll/doctorProfileProcess.php");
    updateDoctorProfile($newLicense, $newStatus);
}
?>

<form action="" method="POST">
    <label for="license">License:</label>
    <input type="text" name="license">
    
    <label for="status">Status:</label>
    <select name="status" id="status">
        <option value="">None</option>
        <option value="Active">Active</option>
        <option value="Inactive">Inactive</option>
    </select>

    <input type="submit" name="change" value="Change">
</form>

</body>
</html>
