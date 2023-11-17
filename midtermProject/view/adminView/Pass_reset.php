<?php
include '../../controller/adminControll/reset_process.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title> RESET PAGE </title>
</head>
<h1 align="center"> Reset Password  </h1>
<body>
    <form method="POST">
        <table align="center">
            <td>
                <fieldset > 
                     <label for="uname"> Username :</label><br>
                     <input type="text" name="uname"><?php echo $uerror ?><br>
                     <label for="pass"> Password : </lebel><br>
                     <input type="password" name="pass"><?php echo $passerror ?><br>
                     <input type="submit" name="Submit" value="Submit">
             </fieldset>
            </td>
        </table>        
</form>
</body>
</html>