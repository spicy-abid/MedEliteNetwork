<?php
$uerror=$aerror=$perror="";
if(isset($_REQUEST["Submit"]))
{
        $uname = $_POST['uname'];
        $add = $_POST['add'];
        $phone = $_POST['phone'];

        if (!empty($uname) && !empty($add) && !empty($phone)) 
        {

            echo "Data updated successfully!";
        } 
        else 
        {
            $uerror= " Please fill this field.";
            $aerror=" Please fill this field.";
            $perror=" Please fill this field.";
        }
    
}
    ?>