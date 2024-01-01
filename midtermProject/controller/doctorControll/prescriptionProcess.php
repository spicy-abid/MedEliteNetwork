<?php
include'../../model/mydb.php';
if(isset($_POST["prescribe"]) )
{
    $prescription = $_POST["prescription"];
    $uname = $_POST["uname"];
}
else
{
    $prescription = "";
    $uname = "";
}

$presE = "";
$userE="";

// // Use json_decode without the second parameter to decode into an object
// $php_data = json_decode(file_get_contents("../../data/patientData.json"));

if (!empty($uname) && isset($_POST["prescribe"])) {
    if ($prescription !== "") {

        $mydb=new mydb();
        $conObj= $mydb->openCon();
        
        
        $result=$mydb->select($conObj,'patientdb','previousPrescription','patientID',$uname);
        
        if($result->num_rows > 0)
        {
            foreach($result as $row)
            {
                // $userE=$row["patientID"];
                $presE=$row["previousPrescription"];
                
            }
            // $presE = "Prescription added successfully.";
        }
        else
        {
        
            
            $presE="Data is not load";
          }
          $result=$mydb->update($conObj,'patientdb','patientID',$uname,'previousPrescription',$prescription);
        if($result)
        {
            $presE="Updated refresh to load";
        }
        else
        {
            $presE="Not Updated";
        }

          $mydb->closeCon( $conObj);











        // foreach ($php_data as $data) {
        //     if ($data->UserName == $uname) {
        //         // Use -> to access object properties
        //         $data->prescription = $prescription;
        //         // Save the updated data back to the JSON file
        //         if (file_put_contents('../../data/patientData.json', json_encode($php_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES))) {
        //             $presE = "Prescription added successfully.";
        //         } else {
        //             $presE = "Failed to update prescription.";
        //         }
        //         break;
        //     }
        // }
        if (!isset($presE)) {
            $presE = "Username not found. Prescription not updated.";
        }
    } else {
        $presE = "Prescription cannot be empty.";
    }
} else {
    $presE = "";
}








?>
