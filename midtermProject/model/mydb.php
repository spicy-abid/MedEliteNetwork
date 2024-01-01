<?php

class mydb {

     function openCon() {
        $dbhost="localhost";
        $dbuser="root";
        $dbpassword="";
        $dbname="medelitenetdb";
        $conn=new mysqli($dbhost,$dbuser,$dbpassword,$dbname);
        return $conn;
    }

     function insertUser($conn,$table,$name,$gender,$homeAddress,$permanentAddress,$email,$contactNo,$institute,$specialization,$licenseNo,$scheduleStart,$scheduleEnd,$password,$valid) {
       $sql= "INSERT INTO $table (name, gender, homeAddress, permanentAddress, email, contactNo, institute, specialization, scheduleStart, scheduleEnd, licenseNo, password, valid) VALUES ('$name', '$gender', '$homeAddress', '$permanentAddress', '$email', '$contactNo', '$institute', '$specialization', '$scheduleStart', '$scheduleEnd', '$licenseNo', '$password', '$valid')";
       $result=$conn->query($sql);
       return $result;
    }

     function closeCon($conn) {
        return $conn->close();
    }

    function checkUser($conn,$table,$email,$password)
    {
        $sql= "SELECT email,password FROM $table where email='$email' and password='$password'";
        $result=$conn->query($sql);
        return $result;
    }

    function checkAvailability($conn,$table,$colum,$value)
    {
        $sql= "SELECT * FROM $table where $colum='$value'";
        $result=$conn->query($sql);
        // $row = mysqli_num_rows($result);
        return $result;
    }
    function update($conn, $table, $condL, $condR,$updL,$updR)
    {
        $sql = "UPDATE $table SET $updL = '$updR' WHERE $condL = '$condR'";
        $result = $conn->query($sql);
        return $result;
    }

    function showAll($conn, $table)
    {
        $sql = "SELECT * FROM `$table` ";
        $result = $conn->query($sql);
        return $result;
    }

    function select($conn, $table,$item,$check,$value)
    {
        $sql = "SELECT $item from $table WHERE $check = '$value'";
        $result = $conn->query($sql);
        return $result;
    }
    function delete($conn, $table,$leftCon,$id)
{
        $sql="DELETE FROM $table WHERE $leftCon = $id";
        $result = $conn->query($sql);
        return $result;
}

function viewPatient($conn, $table, $fname)
{
    $sql = "SELECT * FROM $table WHERE FirstName = '$fname'";
    $result = $conn->query($sql);
    if ($result && $result->num_rows > 0)
    {
        return $result->fetch_assoc();
    }
    else
    {
        return false;
    }
}
}

?>
