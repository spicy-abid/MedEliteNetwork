<?php

$newlicense = $newstatus = null;
$statusError="";

$phpdata = json_decode(file_get_contents("../../data/doctorData.json"), true);

foreach ($phpdata as $key => $data) {
    $doctorName = $data['firstName'] . $data['lastName'];
    $license = $data['License'];
    $status = $data['status'];

    // Check if a new status is being updated
    if (isset($_POST['update']) && $_POST['update'] == true) {
        if ($license == $_POST['license']) {
            $newstatus = $_POST['status'];

            // Update the status in the data array
            $phpdata[$key]['status'] = $newstatus;

            // Save the updated data back to the JSON file
            file_put_contents('../../data/doctorData.json', json_encode($phpdata, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));

            $statusError= "Status changed";
            break;
        } else {
            $statusError= "License does not match";
        }
    } 
}
?>
