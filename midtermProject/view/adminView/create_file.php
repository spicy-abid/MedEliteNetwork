<?php
include '../../controll/adminControll/file_process.php';
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
             </fieldset>
            </td>
        </table>        
</form>
</body>
</html>