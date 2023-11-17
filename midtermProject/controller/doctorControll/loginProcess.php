<?php
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


$jsondata=file_get_contents("../../data/doctorData.json");
$php_data=json_decode($jsondata);

foreach($php_data as $data)
{
//    echo $data->Email;
//    echo $data->Password;
if($uname!=""){
    if($pass!=""){

        if($uname==$data->Email  )
        {
            if($pass==$data->Password )
            {
                // if($data->Role=='Doctor')
                // {

                    $_SESSION['uname']=$uname;
                    $_SESSION['password']=$pass;
                    header('Location:../../view/doctorView/doctorProfile.php');
                    break;
                // }
                // else if($data->Role== 'Admin')
                // {
                    
                // }
            }
            else
            {
                $passError=" Wrong Password";
            }
               
               
        }
        else
        {
            $usrError= "<br>user not exist<br>";
    
        }
    
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

}
?>