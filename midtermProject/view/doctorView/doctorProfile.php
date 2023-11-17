<?php

include("../../controller/doctorControll/doctorProfileProcess.php");
?>
<DOCTYPE html>

    <html>
        <head>
            <title>Doctor Profile</title>
</head>
        <body>
            

<form action="", method="POST" align="center">
    <center>

        hello  <?php echo $fname ."&nbsp;". $lname ."<br>"; ?>
                
    </center>
    
</form>
<form action="" method="POST" enctype="multipart/form-data">
    <fieldset >
        <legend>Profile</legend>
        <img src="<?php echo $profilePic;?>" /><br>
       <input type="file"  id="profilePic" name="profilePic">   <br>
    <input type="submit" name="update" value="update">Profile Picture<br>
    <?php echo $profilePicError; ?>

    </fieldset>
    
    <?php
       
        // echo $profilePic ."<br>";
        // echo $contact ."<br>";
        
    ?>
   
     <a href="patientRecord.php">Patient Record</a> <br>
     <a  href='../../controller/doctorControll/logoutProcess.php' >Logout </a>
    
</form>
<footer>
        Author: Hossain, Md Abid
        <br>
        <a href="abidhossain6781@gmail.com">E-mail</a>
    </footer>
</body>
</html>