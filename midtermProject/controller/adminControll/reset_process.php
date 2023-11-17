<?php
$uerror=$passerror="";
if(isset($_REQUEST["Submit"]))
{
        $uname = $_POST['uname'];
        $pass = $_POST['pass'];

        if (!empty($uname) && !empty($pass)) 
        {
            
            echo "Password Reseted successfully!";
        } 
        else 
        {
            $uerror= " Please fill this field.";
            $passerror=" Please fill this field.";
        }
    
}
    ?>