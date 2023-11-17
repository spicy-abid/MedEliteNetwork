<?php
//all varable are declared here

$fname=$_POST["firstName"];
$lname=$_POST["lastName"];
// $gender=$_POST["gender"];
if(isset($_POST["gender"])){
    $gender=$_POST["gender"];
}
else
{
    $gender= null;
}
$haddress=$_POST["hAddress"];
$paddress=$_POST["pAddress"];
$email=$_POST["email"];
$contact=$_POST["contactNo"];
$eInstitute=$_POST["eInstitute"];
$specializeIn=$_POST["specializeIn"];
$scheduleStart=$_POST["start"];
$scheduleEnd=$_POST["end"];
$password=$_POST["password"];
$cPassword=$_POST["cPassword"];
$licenseNo=$_POST["license"];

$userChecker=0;
$phpdata=json_decode(file_get_contents("../../data/doctorData.json"));

// foreach($phpdata as $data)
// {
// if($data->Email==$email)
// {
//     $userChecker++;
// }







 $formdata=array(
    'firstName'=>$fname,
    'lastName'=>$lname,
    'gender'=>$gender,
    'HomeAddress'=>$haddress,
   'PermanentAddress'=> $paddress,
    'Email'=>$email,
    'Contact'=>$contact,
   'EducationalInstitute'=> $eInstitute,
    'Specialization'=>$specializeIn,
   'ScheduleStart'=> $scheduleStart,
   'ScheduleEnd'=>$scheduleEnd,
    'Password'=>$password,
    'profilePicture'=>Null,
 );



$passwordPattern='/^(?=.*[A-Z])(?=.*[a-z])(?=.*[!@#$%^&*()_+])[A-Za-z0-9!@#$%^&*()_+]{8,}$/';


$flag=0;

$eInstituteError=$licenseError=$haddressError=$paddressError=$cpassError=$fnameError=$lnameError=$emailError=$contactError=$specializeInError=$scheduleError=$passwordError=$genderError="";

if((strlen($fname)<2 || preg_match('/[0-9\W]/',$fname) ) && (strlen($lname)<2 || preg_match('/[0-9\W]/',$lname)))//Number, special character and length condition has cheked here
{
    $fnameError="Invalid First Name"."<br>"."No Number, Special Character and Greater than two character";
    $lnameError="Invalid Last Name"."<br>"."No Number, Special Character and Greater than two character";
}
else
{
    $flag++;
    //echo $flag;
}
if(isset($gender))
{
    $flag++;
    //echo $flag;

}
else
{
    $genderError="Please fill your gender here";
}
if( isset($password) && $password!="" )
{
    if(isset($cPassword) && $cPassword!= "")
    {
        if($password==$cPassword)
        {
            if(preg_match($passwordPattern,$password))
            {
                $flag++;
                //echo "password valid";
            }
            else
            {
                $cpassError= "password not valid";
            }
        }
        else
        {
            $cpassError= "Write the same password";
        }
    }
    else
    {
        $cpassError= "please fill the Confirm Password";
    }
   
}
else
{
   $cpassError=  "<ul> <li>please set password following these</li> <li>Minimum 8 character</li> <li>1 capital letter<li> 1 small letter</li></li>  <li>1 special character</li>";
}

if(isset($contact) && $contact!="")
{
    if (!preg_match('/[A-Za-z@#$%^&*()_+=~`{}[\]|\:;<>?!\'"\ ]/', $contact))
    {
        
        if(strlen($contact)==11)
        {
            $flag++;
            //echo "Number is  valid";
        }
      
       else
       {
        $contactError= "Contact number is minimum 11";
       }
    }
    else
    {

        
        $contactError= "contact Number is not valid";
    }
}
else
{
    $contactError= "Contact number is not set";
}

if(isset($haddress) && $haddress!="")
{
    $flag++;
}
else
{
    $haddressError= "Set home address";
}
if(isset($paddress) && $paddress!= "")
{
    $flag++;
}
else
{
    $paddressError= "Set permanent address";
}

if(isset($email) && $contact!="")
{
    if(preg_match('/@/',$email) && preg_match('/.com/',$email))
    {
        $flag++;
        //echo "email set";
    }
    else
    {
        $emailError= "mail is not valid";
    }
}
else
{
    $emailError= "Please set the mail";
}

if($specializeIn=="")
{
    $specializeInError= "Please select your category";
}
else
{
    
    $flag++;
    //echo "category selected";
   // echo "<br>".$specializeIn;
}
if(isset($scheduleStart) && isset($scheduleEnd) && $scheduleStart!= "" && $scheduleEnd!= "")
{
    $flag++;
    
    

}
else{
    
    $scheduleError="please select your timing schedule for patient";
}
if(isset($eInstitute) && $eInstitute!= "")
{
    $flag++;
}
else
{
    $eInstituteError= " please fill your institution name";
}
if(isset($licenseNo) && $licenseNo!= "")
{
$flag++;
}
else
{
    $licenseError="Please Write your license No here";
}

if($flag== 11)
{
    $existing_json_data=file_get_contents("../../data/doctorData.json");
    $existing_php_data=json_decode($existing_json_data);

    $existing_php_data[]=$formdata;
    $jsondata=json_encode($existing_php_data,JSON_PRETTY_PRINT);

    if(file_put_contents("../../data/doctorData.json",$jsondata) ==true)
    {
        // echo"<meta http-equiv="."refresh"." "." url=.login.php".">";
        echo "Registration successful";
    }
    else
    {
        echo "Registration failed";
    }

}
else
{
    echo "Recheck";
}

?>