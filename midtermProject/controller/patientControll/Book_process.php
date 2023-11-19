<?php
$docError = $patientError = "";

if (isset($_POST["book"])) {
    $docName = $_POST["docName"];
    $patientName = $_POST["patientName"];

    if (empty($docName)) {
        $docError = "  Please enter doctor name";
    }

    if (empty($patientName)) {
        $patientError = "  Please enter patient name";
    } else {
        $php_dataDoctor = json_decode(file_get_contents("doctorData.json"), true);
        $php_dataPatient = json_decode(file_get_contents("patientData.json"), true);
        $book = findBook($php_dataDoctor, $docName);

        if ($book !== null) 
        {
            $patient = array_search($patientName, array_column($php_dataPatient, 'UserName'));

            if ($patient !== false) 
            {
                $php_dataPatient[$patient]['Book'] = $book;
            } 
            else 
            {
                $php_dataPatient[] = [
                    "UserName" => $patientName,
                    "Book" => $book
                ];
            }

            $jsondata = json_encode($php_dataPatient, JSON_PRETTY_PRINT);
            
            if (file_put_contents("patientData.json", $jsondata)) {
                echo "<p>Doctor Booked Successfully</p>";
            } else {
                echo "<p>Doctor Booking Failed</p>";
            }
        } else {
            echo "<p>Doctor's first name not found.</p>";
        }
    }
}

function findBook($doctorData, $docName) {
    foreach ($doctorData as $doctor) {
        if ($doctor['firstName'] == $docName) {
            return $doctor['firstName'] . " " . $doctor['License'];
        }
    }
    return null;
}
?>
