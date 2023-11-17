<?php
include '../../controller/adminControll/client_file_process.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title> FILE CREATION </title>
</head>
<h1 align="center"> Create User File </h1>
<body>
    <form method="POST">
        <table align="center">
            <td>
                <fieldset > 
                     <label for="uname"> UserName : </label><br>
                     <input type="text" name="uname"><?php echo $uError ?><br>
                     <input type="submit" name="create" value="Create">
                     <p><a href="client_management.php">Go back?</a></p>
             </fieldset>
            </td>
        </table>        
</form>
</body>
</html>