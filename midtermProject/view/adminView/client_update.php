<?php
include '../../controller/adminControll/client_up_process.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title> Client UPDATE PAGE </title>
</head>
<h1 align="center"> Update Information </h1>
<body>
    <form method="POST">
        <table align="center">
            <td>
                <fieldset > 
                     <label for="uname"> Username :</label><br>
                     <input type="text" name="uname"><?php echo $uerror ?><br>
                     <label for="phone"> Phone Number : </lebel><br>
                     <input type="text" name="phone"><?php echo $perror ?><br>
                     <label for="add"> Address : </lebel><br>
                     <input type="text" name="add"><?php echo $aerror ?><br>
                     <br>
                     <input type="submit" name="Submit" value="Submit">
                     <input type="reset" name="Reset" value="Reset">
                     <p><a href="client_management.php">Go back?</a></p>
             </fieldset>
            </td>
        </table>        
</form>
</body>
</html>