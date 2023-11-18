<?php
$imageError1=$imageError=$emailError=$bgError=$hightError=$weightError=$dobError=$ageError=$lastnameError=$firstnameError=$uError=$phoneError=$passError=$conpassError=$genderError=$addError="";

if(isset($_REQUEST["Submit"]))
{
    $uname = $_POST["uname"];
    $email= $_POST["email"];
    $firstname=$_POST["firstname"];
    $lastname=$_POST["lastname"];
    $age=$_POST["age"];
    $dob=$_POST["dob"];
    $weight=$_POST["weight"]; 
    $hight = $_POST["hight"];
    $bg= $_POST["bg"];
    $pass = $_POST["pass"];
    $conpass = $_POST["conpass"];
    $phone = $_POST["phone"];
    if(isset($_FILES["photo"])){
      $image = $_FILES["photo"];
    }
    $add = $_POST["add"];
    if(isset($_POST["gender"])){
      $gender = $_POST["gender"];
    }
    


    $haserror=0;
    if (strlen($uname) < 5) 
    {
        $uError = "User Name must be at least 5 characters long.";
        $haserror=1;
    }



    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
      {
        $emailError = "Invalid email format.";
        $haserror = 1;
      }

    
    if (empty($firstname) ) 
    {
        $firstnameError = "First Name must be given.";
        $haserror=1;
    }

    if (empty($lastname) ) 
    {
        $lastnameError = "Last Name must be given.";
        $haserror=1;
    }

    if (!is_numeric($age) || $age <= 0) {
    $ageError = "Age must be a positive numeric value.";
    $haserror = 1;
}


    if (empty($dob) ) 
    {
        $dobError = "Death of birth must be given.";
        $haserror=1;
    }

    if (empty($weight) ) 
    {
        $weightError = "Weight must be given.";
        $haserror=1;
    }

    if (empty($hight) ) 
    {
        $hightError = "Hight must be given.";
        $haserror=1;
    }

    if (empty($bg) ) 
    {
        $bgError = "Blood Group must be given.";
        $haserror=1;
    }

    if (strlen($pass) < 8) {
      $passError= "Password must be at least 8 characters long.";
      $haserror=1;
    } 

    if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/', $pass)) {
    $passError = "Password need to be 8 characters long, at least one uppercase, 
                  one lowercase, one number and one special character.";
    $haserror = 1;
    }


    if (strlen($conpass) < 8) {
      $conpassError= "Passwords do not match.";
      $haserror=1;
    } 

    elseif ($pass !== $conpass) 
    {
      $conpassError= "Passwords do not match.";
      $haserror=1;
    } 

    if (!preg_match('/^[0-9]{11}$/', $phone))
    {
      $phoneError= "Invalid format.";
      $haserror=1;
    } 
    if(!isset($gender))
    {
        $genderError="  Your gender is not set";
        $haserror=1;
    }

    if (isset($_FILES['photo'])) {
        $file_name = $_FILES['photo']['name'];
        $file_size = $_FILES['photo']['size'];
        $file_tmp = $_FILES['photo']['tmp_name'];
        $file_type = $_FILES['photo']['type'];
        $uniqPname= "../../image/" . $file_name;
        // echo $uniqPname;
        if (move_uploaded_file($file_tmp, $uniqPname)) {
             $imageError = "Upload the Image Succesfully.";
            
             
        } 
        else{
          $imageError1 = "Could not upload the Image.";
        }
    }


    if (empty($add)) 
    {
      $addError= "Address is required.";
      $haserror=1;
    }


  if($haserror==0)
  {    
    $data=file_get_contents("../../data/patientData.json");
    $phpdata=json_decode($data);
    $formdata=array
      (
        "UserName" => $uname ,
        "Email"=> $email,
        "First name"=> $firstname,
        "lastname"=> $lastname,
        "age"=> $age,
        "Gender"=> $gender ,
        "Weight"=> $weight,
        "Hight"=> $hight,
        "Blood Group"=> $bg,
        "Death of Birth"=>$dob,
        "Password" => $pass ,
        "Phone Number" => $phone ,
        "Image"=>$image,
        "Address" => $add ,
        "prescription"=>null,
        
      );
      $phpdata[]=$formdata;
      $jsondata=json_encode($phpdata,JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

      if(file_put_contents("../../data/patientData.json",$jsondata))
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