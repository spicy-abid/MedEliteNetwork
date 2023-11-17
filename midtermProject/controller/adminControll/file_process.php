<?php
$uError ="";
if (isset($_POST["create"])) 
{
    $uname = $_POST["uname"];
    
    if (empty($uname)) 
    {
        $uError = "Please enter a username .";
    } 
    else 
    {
        $data = file_get_contents("../../data/adminData.json");
        $phpobj = json_decode($data);    
        if ($phpobj) 
        {
            $foundUser = null;         
            foreach ($phpobj as $user) 
            {
                if (isset($user->UserName) && $user->UserName === $uname) 
                {
                    $foundUser = $user;
                    break;
                }
            }
            
            if ($foundUser) 
            {
                $uname = $foundUser->UserName;
                $pass = $foundUser->Password;
                $phone = $foundUser->{'Phone Number'};
                $add = $foundUser->Address;
                $gender = $foundUser->Gender;
                
                echo "Username: $uname<br>";
                echo "Password: $pass<br>";
                echo "Phone Number: $phone<br>";
                echo "Address: $add<br>";
                echo "Gender: $gender<br>";
            } 
            else
            {
                echo "User not found.";
            }
        } 
    }
}
?>