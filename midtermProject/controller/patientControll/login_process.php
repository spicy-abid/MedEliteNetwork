<?php
// // session_start();

// $uError = $passError = "";

// if (isset($_POST["Login"])) 
// {
//     $uname = $_POST["uname"];
//     $pass = $_POST["pass"];

//     if (empty($uname)) 
//     {
//         $uError = "Please enter your username";
//     } 
//     if (empty($pass)) 
//     {
//         $passError = "Please enter your password";
//     } 
//     else 
//     {
//         $data = file_get_contents("../../data/patientData.json");
//         $phpdata = json_decode($data);
//         foreach($phpdata as $user)
//         {
//             if ($uname == $user->UserName && $pass == $user->Password) 
//             {
//                 session_start();
                 
//                 $_SESSION['username'] = $uname;
//                 $_SESSION['password'] = $pass;
//                 header("Location: ../../view/patientView/Profile.php"); 
//                 exit();
//             }
//             else 
//             {
//                 echo "Login failed";
    
//             }
//         }
        
//     }
// }
?>