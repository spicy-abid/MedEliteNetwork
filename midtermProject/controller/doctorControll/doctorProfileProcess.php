<?php
session_start();

if (empty($_SESSION['uname'])) {
    header("Location:../../view/doctorView/login.php");
}


$profilePicError=$avalError=$feeError="";
if(isset($_POST["availability"])){
$aval=$_POST['availability'];
}
else
{
    $aval="Unavailable";
}
if(isset($_POST["set"])){
    $fee=$_POST['money'];
    }
    else
    {
        $fee=0;
    }

$jsondata = file_get_contents("../../data/doctorData.json");
$php_data = json_decode($jsondata);

foreach ($php_data as $key => $data) {
    if ($_SESSION["uname"] == $data->Email && $_SESSION['password'] == $data->Password) {

        $fname = $data->firstName;
        $lname = $data->lastName;
        $available = $data->Availability;
        $contct = $data->Contact;

        // Check if the profile picture is already set
        if ($data->profilePicture == null) {
            $profilePicError= "Set your profile picture.";
        } 
        else {
            $profilePic = $data->profilePicture;
            

                //  break;
            
        }

        // Check if a new profile picture is being uploaded
        if (isset($_FILES["profilePic"])) {
            $imageChecker = move_uploaded_file($_FILES["profilePic"]["tmp_name"], "../../image/" . $fname . "pp.png");
            $uniqueNamepp = "../../image/" . $fname . "pp.png";
            if(in_array($_FILES["profilePic"]["type"], array("","null","NULL"))) {
                $profilePicError= "Select the picture First (click on Browse)";}
                else {
            if ($_FILES["profilePic"]["size"] > 10485760 || !in_array($_FILES["profilePic"]["type"], array("image/jpeg", "image/jpg", "image/png"))) {
                $profilePicError= "Size needs to be less than 10MB and only accept jpg, png, jpeg.";
            } else {
                if ($imageChecker) {
                    $profilePicError= "File uploaded.";
                    // Update the profilePicture property with the relative path
                    $php_data[$key]->profilePicture = $uniqueNamepp;
                    // Save the updated data back to the JSON file
                    file_put_contents('../../data/doctorData.json', json_encode($php_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));//Remove the front slash in image json file
                    $profilePicError= "<br>Profile picture updated.";
                    $profilePic = $data->profilePicture;
                    break; // Exit the loop after updating the profile picture
                } else {
                    $profilePicError= "Failed to upload profile picture.";
                }
            }
        }
        } 
        if(isset($_POST["change"]) && $_POST["availability"]!="")
        {
            $php_data[$key]->Availability = $aval;
            file_put_contents('../../data/doctorData.json', json_encode($php_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
        }
        else
        {
            $avalError="No change";
        }

        if(isset($_POST["money"]))
        {
            $php_data[$key]->Fee = $fee;
            file_put_contents('../../data/doctorData.json', json_encode($php_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
        }
        else
        {
            $feeError="No change";
        }

    }
}
?>
