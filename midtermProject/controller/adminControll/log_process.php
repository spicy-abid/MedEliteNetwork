<?php
$uError = $passError = "";

if (isset($_POST["Login"])) 
{
    $uname = $_POST["uname"];
    $pass = $_POST["pass"];

    if (empty($uname)) 
    {
        $uError = "Please enter your username";
    } 
    if (empty($pass)) 
    {
        $passError = "Please enter your password";
    } 
    else 
    {
        $data = file_get_contents("../../data/adminData.json");
        $phpdata = json_decode($data);
        $loginSuccessful = false;
        foreach($phpdata as $user)
        {
            if ($uname == $user->UserName && $pass == $user->Password) 
            {
                $loginSuccessful = true;
                session_start();
                $_SESSION["uname"] = $uname;
                break;
            }
        }

        if ($loginSuccessful) 
        {
            header("Location: ../../view/adminView/profile.php");
        } 
        else 
        {
            echo "Login failed";
        }
        
    }
}
?>
