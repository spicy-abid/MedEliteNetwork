<?php
 include("../../controller/doctorControll/checkerProcess.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">

        License Checker 
        <input type="text" name="license">
        <input type="submit" name="Check" value="Check">
        <?php echo $status; ?>
        <br>
        <a href="login.php">login</a>
    </form>
</body>
</html>