<?php
$fError=$lError=$phoneError=$passError=$cpassError=$genderError=$addError=$emailError=$dbError=$countryError=$cityError="";
if(isset($_REQUEST["Submit"]))
{
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$pass = $_POST["pass"];
$cpass = $_POST["conpass"];
$phone = $_POST["phone"];
$add = $_POST["add"];
$email=$_POST["email"];
$country=$_POST["country"];
$city=$_POST["city"];
$error=0;

if((strlen($fname)<3 || preg_match('/[0-9\W]/',$fname) ) )
{
    $fError="Invalid First Name"."<br>"."No Number, Special Character and Greater than three characters";
    $error=1;
}
if((strlen($lname)<3 || preg_match('/[0-9\W]/',$lname)))
{
    $lError="Invalid Last Name"."<br>"."No Number, Special Character and Greater than three characters";
    $error=1;
}
if(!isset($_POST["gender"]))
    {
        $genderError=" Your gender is not set";
        $error=1;
    }
if (strlen($pass) < 8) 
    {
      $passError= " Password must be at least 8 characters long.";
      $error=1;
    }
elseif (!preg_match("/[a-z]+/", $pass) || !preg_match("/[!@#$%^&*(),.?\":{}|<>]+/", $pass)) 
    {
    $passError = "Password must contain at least one lowercase letter and one special character.";
    $error = 1;
    }
elseif ($pass !== $cpass) 
    {
      $cpassError= " Passwords do not match.";
      $error=1;
    } 

if (!preg_match('/^\d{11}$/', $phone)) {
        $phoneError = "Must contain exactly 11 numbers.";
        $error = 1;
    }

if (empty($add)) 
    {
      $addError= "Address is required.";
      $error=1;
    }

if (empty($email)) 
    {
        $emailError = "Please enter an email address";
        $error = 1;
    } 
elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
        $emailError = "Invalid email format";
        $error = 1;
    }
    
  
if($error==0)
  {    
    $phpdata=json_decode(file_get_contents("../../data/managerUsers.json"));
    $formdata=array
    (
    'FirstName'=>$fname,
    'LastName'=>$lname,
    'Gender'=>$_POST["gender"],
    'HomeAddress'=>$add,
    'Email'=>$email,
    'Contact'=>$phone,
    'Password'=>$pass,
    'profilePicture'=>Null,
    );
      $phpdata[]=$formdata;
      $jsondata=json_encode($phpdata,JSON_PRETTY_PRINT);

      if(file_put_contents("../../data/managerUsers.json",$jsondata))
      {
        echo "Data Saved Successfully" ;
      }
}
}
?>