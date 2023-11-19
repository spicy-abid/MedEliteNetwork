<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Doctors Page</title>
</head>
 
<body>
    <h1 align="center">This is Available Doctors Page</h1>
    <h2><a href="doctorBook.php">Doctor Booking</a></h2>
    <?php
    $data = file_get_contents("../../data/doctorData.json");
    $phpdata = json_decode($data, true);
 
    $doctors = array();
 
    foreach ($phpdata as $user) {
        $doctors[] = array(
            'Availability' => $user['Availability'],
            'firstName' => $user['firstName'],
            'EducationalInstitute' => $user['EducationalInstitute'],
            'ScheduleEnd' => $user['ScheduleEnd'],
            'ScheduleStart' => $user['ScheduleStart'],
            'Fee' => $user['Fee'],
            
        );
    }
 
    foreach ($doctors as $doctor) {
        echo "Availability: " . $doctor['Availability'] . "<br>";
        echo "First Name: " . $doctor['firstName'] . "<br>";
        echo "Educational Institute: " . $doctor['EducationalInstitute'] . "<br>";
        echo "Schedule End: " . $doctor['ScheduleEnd'] . "<br>";
        echo "Schedule Start: " . $doctor['ScheduleStart'] . "<br><br>";
        echo "Payment Fee". $doctor['Fee'] ."<br><br>";
    }
    ?>
</body>
 
</html>