<?php
//  session_start();

$patientProfilepic = null;

$jsondata = file_get_contents("../../data/patientData.json");
$phpdata = json_decode($jsondata);

foreach ($phpdata as $key => $data) {
    if ($_SESSION["uname"] == $data->UserName) {
        // Assuming the 'Image' property is an object with a 'name' attribute
        if (isset($data->Image->name)) {
            $patientProfilepic = "../../image/" . $data->Image->name ;
        }
    }
}


?>
