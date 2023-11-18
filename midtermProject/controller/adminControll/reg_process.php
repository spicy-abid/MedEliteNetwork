<?php
$uError=$phoneError=$passError=$cpassError=$genderError=$addError=$emailError=$dbError=$countryError=$cityError="";
if(isset($_REQUEST["Submit"]))
{
    $uname = $_POST["uname"];
    $pass = $_POST["pass"];
    $cpass = $_POST["conpass"];
    $phone = $_POST["phone"];
    $add = $_POST["add"];
    $email=$_POST["email"];
    $country=$_POST["country"];
    $city=$_POST["city"];
    $haserror=0;
    if (strlen($uname) < 5) 
    {
        $uError = " UserName must be at least 5 characters long.";
        $haserror=1;
    }
    elseif (!preg_match("/^[a-zA-Z]+$/", $uname)) 
    {
      $uError= "Username should contain only alphabetic characters.";
      $haserror=1;
    }
    if (strlen($pass) < 8) 
    {
      $passError= " Password must be at least 8 characters long.";
      $haserror=1;
    }
    elseif (!preg_match("/[A-Z]+/", $pass) || !preg_match("/[a-z]+/", $pass)) 
    {
      $passError= " Password must contain at least one uppercase letter & one lowercase letter.";
      $haserror=1;
    } 
    elseif ($pass !== $cpass) 
    {
      $cpassError= " Passwords do not match.";
      $haserror=1;
    } 

    if (!preg_match('/^[0-9]{11}$/', $phone))
    {
      $phoneError= " Invalid format.";
      $haserror=1;
    } 
    if(!isset($_POST["gender"]))
    {
        $genderError=" Your gender is not set";
        $haserror=1;
    }
    if (empty($add)) 
    {
      $addError= "Address is required.";
      $haserror=1;
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
      $emailError= "Invalid email address.";
      $haserror=1;
    }
    if (empty($_POST["db"])) 
    {
      $dbError= " Date of Birth is required.";
      $haserror=1;
    }
    if(empty($country))
    {
      $countryError=" Country must be filled.";
      $haserror=1;
    }
    if (empty($country) && !empty($city)) 
    {
      $cityError = "Please provide a city when a country is specified.";
      $haserror=1;
    }
  if($haserror==0)
  {    
    $data=file_get_contents("../../data/adminData.json");
    $phpdata=json_decode($data);
    $formdata=array
      (
        "UserName" => $uname ,
        "Email" => $email,
        "Password" => $pass ,
        "Phone Number" => $phone ,
        "Date of Birth" => $_POST["db"] ,
        "Address" => $add ,
        "Gender"=> $_POST["gender"] ,
        "Country" => $country,
        "City" => $city,
        "Role" =>"Admin",
      );
      $phpdata[]=$formdata;
      $jsondata=json_encode($phpdata,JSON_PRETTY_PRINT);

      if(file_put_contents("../../data/adminData.json",$jsondata))
      {
        echo "Data Saved Successfully" ;
      }
      else
      {
        echo "Data Saving Failed" ;
      }

  }
}

?>