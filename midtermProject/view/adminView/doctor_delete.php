<?php
include '../../controller/adminControll/doctor_del_process.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title> Doctor DELETE PAGE</title>
</head>

<h1 align="center">Delete User</h1>

<body>
    <form method="POST" action="">
        <table align="center">
            <td>
                <fieldset>
                    <label for="uname">Username:</label><br>
                    <input type="text" name="uname"><?php echo $delError ?><br>
                    <input type="submit" name="del" value="Delete">
                    <p><a href="doctor_management.php">Go back?</a></p>
                </fieldset>
            </td>
        </table>
    </form>
</body>

</html>
