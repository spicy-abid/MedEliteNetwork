<?php 
include '../../controller/adminControll/reg_process.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title> REGISTRATRATION PAGE </title>
</head>
<h1 align="center"> Please fill up this form to register. </h1>
<body>
    <form method="POST">
        <table align="center">
            <td>
                <fieldset > 
                     <label for="uname"> UserName : </lebel><br>
                     <input type="text" name="uname"><?php echo $uError ?><br>
                     <label for="email"> Email : </label><br>
                     <input type="email" name="email"><?php echo $emailError ?><br>
                     <label for="pass"> Password : </lebel><br>
                     <input type="password" name="pass"><?php echo $passError ?><br>
                     <label for="conpass"> Confirm Password : </lebel><br>
                     <input type="password" name="conpass"><?php echo $cpassError ?><br>
                     <label for="phone"> Phone Number : </lebel><br>
                     <input type="text" name="phone"><?php echo $phoneError ?><br>
                     <label for="add"> Address : </lebel><br>
                     <input type="text" name="add"><?php echo $addError ?><br>
                     <br>
                     <label for="gender"> Gender : </lebel>
                     <input type="radio" name="gender" value="Male"> Male 
                     <input type="radio" name="gender" value="Female"> Female
                     <input type="radio" name="gender" value="Others"> Others <?php echo $genderError ?><br>
                     <br>
                     <label for="db">Date of Birth:</label>
                     <input type="date" name="db"><?php echo $dbError ?><br>
                     <label for="country"> Country : </lebel><br>
                     <input type="text" name="country"><?php echo $countryError ?><br>
                     <label for="city"> City : </lebel><br>
                     <input type="text" name="city"><?php echo $cityError ?><br>
                     <input type="submit" name="Submit" value="Submit">
                     <input type="reset" name="Reset" value="Reset"><br>
                     <a href="login.php">Already have an account? Go to login.</a>
             </fieldset>
            </td>
        </table>        
</form>
</body>
</html> 