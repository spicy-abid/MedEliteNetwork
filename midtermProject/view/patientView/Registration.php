<?php 
include '../../controller/patientControll/registration_process.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title> Registration Form </title>
</head>
<h1 align="center"> Patient Registration Page. </h1>

<body>
    <form method="POST" action="" enctype="multipart/form-data">
        <table align="center">
            <tr>

                <td>
                    <fieldset>
                        <legend><b>Patient Information</b></legend><br><br>
                        <table>
                            <tr>
                                <td>
                                    <label> User Name : </lebel><br><br>
                                </td>
                                <td>
                                    <input type="text" name="uname"><?php echo"  ". $uError ?><br><br>

                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label>Email :</label><br><br>
                                </td>
                                <td>
                                    <input type="text" name="email"><?php echo " ".$emailError;?><br><br>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label> First Name : </lebel><br><br>
                                </td>
                                <td>
                                    <input type="text" name="firstname"><?php echo"  ". $firstnameError ?><br><br>

                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label> Last Name : </lebel><br><br>
                                </td>
                                <td>
                                    <input type="text" name="lastname"><?php echo"  ". $lastnameError ?><br><br>

                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label>Gender :</lebel><br>
                                </td>
                                <td>
                                    <input type="radio" name="gender" value="Male"> Male
                                    <input type="radio" name="gender" value="Female"> Female
                                    <input type="radio" name="gender" value="Others"> Others
                                    <?php echo "  ".$genderError ?><br>
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <label>Age: </lebel><br><br>
                                </td>
                                <td>
                                    <input type="number" name="age"><?php echo"  ". $ageError?><br><br>

                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label>Death of Birth: </lebel><br><br>
                                </td>
                                <td>
                                    <input type="date" name="dob"><?php echo"  ". $dobError?><br><br>

                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label>Weight: </lebel><br><br>
                                </td>
                                <td>
                                    <input type="text" name="weight"><?php echo"  ". $weightError?><br><br>

                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label>Hight: </lebel><br><br>
                                </td>
                                <td>
                                    <input type="text" name="hight"><?php echo"  ". $hightError?><br><br>

                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="bg">Blood Group :<br><br>
                                </td>
                                <td>
                                    <select name="bg" id="bg"></label>
                                        <option value="">Select</option>
                                        <option value="A+">A+</option>
                                        <option value="A">A</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B">B</option>
                                        <option value="B-">B-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                    </select><?php echo" ". $bgError;?><br><br>
                                </td>
                            </tr>



                            <tr>
                                <td>
                                    <label>Password: </lebel><br><br>
                                </td>
                                <td>
                                    <input type="password" name="pass"><?php echo"  ". $passError?><br><br>

                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label>Confirm Password :</lebel><br><br>
                                </td>
                                <td>
                                    <input type="password" name="conpass"><?php echo"  ". $conpassError?><br><br>

                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label>Phone Number :</lebel><br><br>
                                </td>
                                <td>
                                    <input type="text" name="phone"><?php echo"  ". $phoneError?><br><br>

                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label>Upload Your Image: </label><br><br>
                                </td>
                                <td>
                                    <input type="file"
                                        name="photo"><?php echo " ".$imageError; echo " ".$imageError1;?><br><br>
                                </td>

                            </tr>

                            <tr>
                                <td>
                                    <label>Address :</lebel><br><br>
                                </td>
                                <td>
                                    <textarea name="add" cols="30"
                                        rows="8"></textarea><?php echo"  ". $addError?><br><br>

                                </td>
                            </tr>




                            <tr>
                                <td></td>
                                <td>
                                    <input type="submit" name="Submit" value="Submit">
                                    <input type="reset" name="Reset" value="Reset">
                                </td>
                            </tr>

                            <tr>
                                <td></td>
                                <td><br>
                                    Already have an account? Go to <a href="Login.php">Login</a>
                                    page.
                                </td>
                            </tr>



                        </table>


                    </fieldset>
                </td>

            </tr>
        </table>
    </form>
</body>

</html>