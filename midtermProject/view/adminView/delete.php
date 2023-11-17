<?php
include '../../controller/adminControll/del_process.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>DELETE PAGE</title>
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
                </fieldset>
            </td>
        </table>
    </form>
</body>

</html>
