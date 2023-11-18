<?php 
session_start();
//  include "Logout.php";
include("../../controller/patientControll/profileProcess.php");
if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
    header("Location: Login.php"); // Redirect to login page
    exit();
}

?>


<!DOCTYPE html>
<html>

<head>
    <title> Profile Page </title>
</head>



<body>

<main>
        <?php
        
            $data = file_get_contents("../../data/patientData.json");
            $phpdata = json_decode($data, true);
            foreach($phpdata as $user)
            {
                if($_SESSION["uname"]==$user['UserName'])
                {
                    echo"<h2>Welcome ".$user['UserName'].". Its your Profile</h2>";
                }
               
                
            }
        //    echo $uniqPname;
        ?>
         

    </main>
    <table border="1">
        <tr>
            <td>
                
                <img src="<?php echo $patientProfilepic;?>">
            </td>
        </tr>
    </table>
    
    <header>
        <h1 align="center">Patient Profile Page</h1>

        <a href="../../controller/doctorControll/logoutProcess.php">logout</a>

        <hr>

        <nav>
            <ul>
                <li> <a href="Available_Doctors.php">Available Doctors</a> </li>
                <li> <a href="Reports.php">Reports</a> </li>
                <li> <a href="Appointment_Booking.php">Appointment Booking</a> </li>
                <li> <a href="Patients_Problem.php">Patients Problem</a> </li>

            </ul>
        </nav>




    </header>






</body>

</html>