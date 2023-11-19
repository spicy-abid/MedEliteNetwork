<?php
if (!empty($_POST['license'])) {
    $license = $_POST['license'];
} else {
    $license = "";
}
$status = "";

$php_data = json_decode(file_get_contents("../../data/doctorData.json"), true);

foreach ($php_data as $data) {
    if ($data['License'] == $license) {
        $status = $data['status'];
        break; // No need to continue once the license is found
    } else {
        $status = "License not found";
    }
}
?>
