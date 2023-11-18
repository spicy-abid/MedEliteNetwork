<?php

if(isset($_POST["Login"])) {
    include("../../controller/doctorControll/loginProcess.php");

}
else {
    session_start();
    if(!empty($_SESSION['uname']))
    {
        header("Location:../view/doctorView/profile.php");
    }
    else
    {
        // echo "Error loginSession";
    }
    
    $passError=$usrError="";
}
?>
<DOCTYPE html>
    <html>
        <head>
            <title>LogIn page</title>
</head>
        <body>
            <center>

                <h1> SignIn here </h1> 
                <form action="", method="POST" >
                    <fieldset >
                        <legend>LogIn</legend>
                        <figure >

                            <img align="right" src="../../image/forLoginBackg.jpg" alt="Loading" >
        
                        </figure>
                        User Name <input type="text" name="uname" /><br>
                        <?php echo $usrError; ?><br><br>
                        Password <input type= "password" name="password" /><br>
                        <?php echo $passError; ?><br><br>
                        <input type="submit" value="LogIn" name="Login"/>
            <br>
            If you haven't register yet. Click here for <br>
            <a href="../patientView/Registration.php">Register as Patient</a><br>
            <a href="registration.php">Register as Doctor</a><br>
            <a href="../adminView/registration.php">Register as Admin</a><br>
            
                    </fieldset>
                </form>
    
    <footer>
        Author: Hossain, Md Abid
        <br>
        <a href="abidhossain6781@gmail.com">E-mail</a>
    </footer>
            </center>
</body>
</html>
