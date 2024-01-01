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
<!DOCTYPE html>
    <html>
        <head>
        <link rel="stylesheet" type="text/css" href="../../css/registrationStyle.css">

        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title> Doctor Registration </title>
            <script src="../../js/myscript.js"></script>

            
</head>

        <body>
        
        <center>
 


        <form action="" method="POST" onsubmit="return formValidation()">
        <h2>

            <label id="re">REGISTER YOUR PROFILE</label>
        </h2>
    <table>
        <th>
            <td align="center">
                <label id="do">DOCTOR</label>
</td>
</th>
        <th >
     <td >
        
</td>       
</th>
        <tr>
            <td>
                First Name <td><input type="text" name="firstName" id="firstName" size="55"><br><?php //echo $fenamError;?><p id="firstNameER"></p>
</td></td> 
</tr>
<tr><td>
                Last Name <td><input type="text" name="lastName"size="55" id="lastName">  <br><?php //echo $lnameError;?><p id="lastNameER"></p></td>
</td>
</tr>
<tr>
<td>
            Gender
            <td>
            <input type="radio" name="gender" value="Male" id="gender"> Male<br> 
            <input type="radio" name="gender" value="Female" id="gender">  Female <br>
            <input type="radio" name="gender" value="Others" id="gender">Others <br><?php //echo $genderError; ?><p id="genderER"></p></td>
</td>
</tr>
<tr>
    <td>
        Home Address <td><input type="tel" name="hAddress" id="hAddress" size="55"><br><?php //echo $haddressError; ?><p id="hAddressER"></p></td>
</td>
</tr>
<tr>
    <td>
        Permanent Address <td><input type="text" name="pAddress" id="pAddress" size="55"><br><?php //echo $paddressError; ?><p id="pAddressER"></p></td>
</td>
</tr>
<tr>
<td>
                Email <td><input type="text" name="email" id="email"size="55"><br><?php //echo $emailError; ?><p id="emailER"></p></td>
</td>
</tr>
<tr>
<td>
                Contact Number <td><input type="text" name="contactNo"id="contactNo" size="55"> <br><?php //echo $contactError; ?><p id="contactER"></p></td>

</td>
</tr>

<tr>
    <td>
        Educational Institute <td><input type="text" name= "eInstitute" id="eInstitute" size="55"><br> <?php //echo $eInstituteError; ?><p id="eInstituteER"></p></td>
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

                     </select><?php //echo $specializeInError; ?><p id="specializeInError"></p></td>
</td>
</tr>
<tr>
    <td>
        License No: <td><input type="text" name= "license" id="license" size="55"><br><?php //echo $licenseError; ?><p id="licenseER"></p></td>
</td>
</tr>
<tr>
    <td>
       Scheduele <td><input type="time" name= "start" id="start" >&nbsp;to&nbsp;<input type="time" name= "end" id="end"><br><?php //echo $scheduleError; ?><p id="scheduleER"></p></td>
</td>
</tr>
<tr>
    <td>
    
       Set Password <td><div align='left'><input type="Password" name= "password" id="password"></div><?php //echo $cpassError; ?><p id="passwordER" ></p></td>
</td>
</tr>

<tr>
    <td>
       Confirm Password <td><input type="Password" name= "cPassword" id="cPassword"></td>
       
</td>

</tr>


</table>

<input type="submit" name= "submit" id="submit" value="Submit" >

<input type="reset" name= "reset" id="reset" value="reset" >
<br>
If you haven register . 
            <a href="login.php">Click here for login</a>
                    
</form>
                
</center>
</body>
</html>
