<?php

include("../../controller/doctorControll/doctorProfileProcess.php");
?>
<DOCTYPE html>

    <html>
        <head>
            <link rel="stylesheet" type="text/css" href="../../css/doctorProfileStyle.css">
            <meta charset="UTF-8">
    <meta http-equiv="refresh" >
            <title>Doctor Profile</title>
            <script src="../../js/myscript.js"></script>
            
</head>
        <body>
            

<form action="", method="POST" >
    
        <h2>
           <label id="n">
               Hello Doctor <br> <?php echo $fname ."<br>"; ?>
               
               </label> 

        </h2>

                
    
    
</form>

<fieldset >
<legend>Profile</legend>
<form action="" method="POST" enctype="multipart/form-data">
    
        
        <table border="1">
            <tr>
                <td>
                    <img id="pp"src="<?php echo $profilePic;?>" /><br>
                    
                </td>
            </tr>
        </table>
       <input type="file"  id="profilePic" name="profilePic">   <br>
    <input type="submit" name="update" value="update">Profile Picture<br>
    <?php echo $profilePicError; ?><br>
    

    
   
    


     
    
</form>
<form action="" method="post" >
    <h3>
 
  <label id="fee">
  Fee's
      </label>  
      <input type="number" name="money" id="money"> 
<!-- <button name="hideButton" id="hideButton">HIDE</button> -->
<input type="submit" name="set" value="Set" id="set"><br>
<?php echo $feeError; ?><br>
    <!-- <input type="submit" name="free" value="Free" ><br> -->

    </h3>
    </form>
    <form action="" method="post">
        <?php echo $available; ?>&nbsp; Status:
        
        <select name="availability" id="availability">
            <option value="">None</option>
            <option value="Available">Available</option>
            <option value="Unavalable">Unavalable</option>
        </select>
        
        <input type="submit" name="change" value="Change">
        <?php echo $avalError; ?><br>
        

    </form>


    <br><br><br><br>
    <a href='../../controller/doctorControll/logoutProcess.php' id="logout" >Logout </a>

</fieldset>

<h2 >

<a  href="patientRecord.php" id="ii">Patient Record</a> <br>
</h2>

<footer>
        Author: Hossain, Md Abid
        <br>
        <a href="abidhossain6781@gmail.com">E-mail</a>
    </footer>
</body>
</html>