<?php
include'../../model/mydb.php';
 session_start();
 
if(!empty($_SESSION['uname']))
{
    
    header("Location:../../view/doctorView/doctorProfile.php");
}
else
{
    echo "Error login process session";
}
$uname=$_POST["uname"];
$pass=$_POST["password"];
$passError=$usrError="";


// $jsondataDoctor=file_get_contents("../../data/doctorData.json");
// $php_dataDoctor=json_decode($jsondataDoctor);
// $php_dataAdmin=json_decode(file_get_contents("../../data/adminData.json"));
// $php_dataPatient=json_decode(file_get_contents("../../data/patientData.json"));
// $php_dataManager=json_decode(file_get_contents("../../data/managerUsers.json")) ;

// foreach($php_dataDoctor as $dataDoctor)
// {
//    echo $data->Email;
//    echo $data->Password;


if($uname!=""){
    if($pass!=""){
        $mydb=new mydb();
        $conObj= $mydb->openCon();
    
        
        $result=$mydb->checkUser($conObj,'doctordb',$uname,$pass);
       
        if($result->num_rows>0)
    {
        
        $_SESSION['uname']=$uname;
        $_SESSION['password']=$pass;
        header('Location:../../view/doctorView/doctorProfile.php');
        }
    else
    {
        $passError=" Wrong Password";
        
    }
    $mydb->closeCon( $conObj);
    
        // if($uname==$dataDoctor->Email  )
        // {
        //     if($pass==$dataDoctor->Password )
        //     {  
        //         if($dataDoctor->status== "Inactive")
        //         {
        //             echo"<br>please wait for validation";
        //             break;
        //         }
        //         else
        //         {
        //             $_SESSION['uname']=$uname;
        //             $_SESSION['password']=$pass;
        //             header('Location:../../view/doctorView/doctorProfile.php');
        //             break;
        //         }
               
                   
              
        //     }
        //     else
        //     {
        //         $passError=" Wrong Password";
        //     }
               
               
        // }
        // else
        // {
        //     $usrError= "<br>user not exist<br>";
    
        // }
    // }
    // else if($data->Role== 'Admin')
    // {
        
    // }
    
    }
    else
    {
        $passError= "Fill the password properly";
    }
    }
    
    else
    {
        $usrError= "Fill username  properly";
    }

// }

// foreach($php_dataAdmin as $dataAdmin)
// {


//         if($uname==$dataAdmin->UserName  )
//         {
//             if($pass==$dataAdmin->Password )
//             {  

                
            
//                     $_SESSION['uname']=$uname;
//                     $_SESSION['password']=$pass;
//                     header("Location: ../../view/adminView/profile.php");
//                     break;
                
               
                   
              
//             }
//             else
//             {
//                 $passError=" Wrong Password";
//             }
               
               
//         }
//         else
//         {
//             $usrError= "<br>user not exist<br>";
    
//         }
 
// }
// foreach($php_dataPatient as $dataPatient)
// {


//         if($uname==$dataPatient->UserName  )
//         {
//             if($pass==$dataPatient->Password )
//             {  

                
            
//                     $_SESSION['uname']=$uname;
//                     $_SESSION['password']=$pass;
//                     header("Location: ../../view/patientView/Profile.php"); 
//                     break;
                
               
                   
              
//             }
//             else
//             {
//                 $passError=" Wrong Password";
//             }
               
               
//         }
//         else
//         {
//             $usrError= "<br>user not exist<br>";
    
//         }
//         foreach($php_dataManager as $dataManager)
//         {
        
        
//                 if($uname==$dataManager->FirstName  )
//                 {
//                     if($pass==$dataManager->Password )
//                     {  
        
                        
                    
//                             $_SESSION['uname']=$uname;
//                             $_SESSION['password']=$pass;
//                             header("Location: ../../view/managerView/homeManager.php"); 
//                             break;
                        
                       
                           
                      
//                     }
//                     else
//                     {
//                         $passError=" Wrong Password";
//                     }
                       
                       
//                 }
//                 else
//                 {
//                     $usrError= "<br>user not exist<br>";
            
//                 }
         
            
        
        
//         }
    


// }


?>