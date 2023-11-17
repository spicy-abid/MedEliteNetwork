<?php
if(isset($_POST["submit"]))
{
    include "../../controller/doctorControll/registrationProcess.php";
   
}
else
{
    $fname=NULL;
    $lname=NULL;
    $gender=null;
    $haddress=NULL;
    $paddress=NULL;
    $emaiL=NULL;
    $contact=NULL;
    $eInstitute=NULL;
    $specializeIn=NULL;
    $scheduleStart=null;
    $scheduleEnd=null;
    $password=NULL;
    $cPassword=NULL;
    $licenseNo=NULL;
    $eInstituteError=$licenseError=$haddressError=$paddressError=$cpassError=$fnameError=$lnameError=$emailError=$contactError=$specializeInError=$scheduleError=$passwordError=$genderError="";
}


?>
<DOCTYPE html>
    <html>
        <head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title> Doctor Registration </title>
</head>

        <body>
        <center>
   

<form action="" , method="POST">
    <table>
        <th>
            <td align="center">
                DOCTOR
</td>
</th>
        <th >
     <td >
        REGISTER YOUR PROFILE
</td>       
</th>
        <tr>
            <td>
                First Name <td><input type="text" name="firstName"size="55"><br><?php echo $fnameError;?></td>
</td>
</tr>
<tr><td>
                Last Name <td><input type="text" name="lastName"size="55"><br><?php echo $lnameError;?></td>
</td>
</tr>
<tr>
<td>
            Gender
            <td>
            <input type="radio" name="gender" value="Male" > Male<br> 
            <input type="radio" name="gender" value="Female">  Female <br>
            <input type="radio" name="gender" value="Others">Others <br><?php echo $genderError; ?></td>
</td>
</tr>
<tr>
    <td>
        Home Address <td><input type="tel" name="hAddress" size="55"><br><?php echo $haddressError; ?></td>
</td>
</tr>
<tr>
    <td>
        Permanent Address <td><input type="text" name="pAddress" size="55"><br><?php echo $paddressError; ?></td>
</td>
</tr>
<tr>
<td>
                Email <td><input type="text" name="email"size="55"><br><?php echo $emailError; ?></td>
</td>
</tr>
<tr>
<td>
                Contact Number <td><input type="text" name="contactNo"size="55"> <br><?php echo $contactError; ?></td>

</td>
</tr>

<tr>
    <td>
        Educational Institute <td><input type="text" name= "eInstitute" size="55"><br> <?php echo $eInstituteError; ?></td>
</td>
</tr>

<tr>
    <td>
        Specialize In <td>
    <select name="specializeIn" id="specializeIn"  >
                    <option value="">None</option>
                     <option value="Internal medicine">Internal medicine</option>
                     <option value="Neurology">Neurology</option>
                     <option value="Orthopedics">Orthopedics</option>
                     <option value="Ophthalmology">Ophthalmology</option>
                     <option value="Pediatrics">Pediatrics</option>
                     <option value="Urology">Urology</option>
                     <option value="Pathology">Pathology</option>
                     <option value="Obstetrics and gynaecology">Obstetrics and gynaecology</option>

                     </select><?php echo $specializeInError; ?></td>
</td>
</tr>
<tr>
    <td>
        License No: <td><input type="text" name= "license" size="55"><br><?php echo $licenseError; ?></td>
</td>
</tr>
<tr>
    <td>
       Scheduele <td><input type="time" name= "start" >&nbsp;to&nbsp;<input type="time" name= "end" ><br><?php echo $scheduleError; ?></td>
</td>
</tr>
<tr>
    <td>
    
       Set Password <td><div align='left'><input type="Password" name= "password" ></div><div align=><?php echo $cpassError ?></div></td>
</td>
</tr>

<tr>
    <td>
       Confirm Password <td><input type="Password" name= "cPassword" ></td>
       
</td>

</tr>


</table>

<input type="submit" name= "submit" value="Submit" >

<input type="reset" name= "reset" value="reset" >
<br>
If you haven register . 
            <a href="login.php">Click here for login</a>
                    
</form>
                
</center>
</body>
</html>
