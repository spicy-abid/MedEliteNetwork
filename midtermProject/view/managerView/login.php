<?php
include '../../controller/managerControl/loginProcess.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title> LOGIN PAGE </title>
</head>
<h1 align="center"> Login. </h1>
<body>
    <form method="POST">
        <table align="center">
            <td>
                <fieldset > 
                     <label for="uname"> UserName : </lebel><br>
                     <input type="text" name="uname"><?php echo $uError ?><br>
                     <label for="pass"> Password : </lebel><br>
                     <input type="password" name="pass"><?php echo $passError ?><br>
                     <br>
                     <input type="submit" name="Login" value="Login">
                     <input type="reset" name="Reset" value="Reset"><br>
                     <p><a href="registration.php">create new account?</a></p>
             </fieldset>
            </td>
        </table>        
</form>
</body>
</html> 
