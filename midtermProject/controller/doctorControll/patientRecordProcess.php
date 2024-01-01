<?php
include '../../model/mydb.php';
// $jsonData = file_get_contents('../../data/patientData.json');
// $phpdata = json_decode($jsonData, true);
// $patientNumber=1;
// foreach ($phpdata as $data)
// {
//   echo '<h1>Patient&nbsp; ' . $patientNumber . ' Information</h1>';
    
//     echo "<p>PatientID: " . $data['UserName'] . "</p>";
//     echo '<p>FirstName: ' . $data['First name'] . '</p>';
//     echo '<p>LastName: ' . $data['lastname'] . '</p>';
//     echo '<p>Age: ' . $data['age'] . '</p>';
//     echo '<p>Weight: ' . $data['Weight'] . '</p>';
//     echo '<p>Phone Number: ' . $data['Phone Number'] . '</p>';
//     echo '<p>Gender: ' . $data['Gender'] . '</p>';
//     echo '<p>Previous Prescription&nbsp;: ' . $data['prescription'] . '</p>';
//     $patientNumber++;
// }

$patientID;

$firstName;

$lastName;

$age;

$weight;

$contact;

$gender;

$previousPrescription;
$message;

$dataError=null;


$mydb=new mydb();
$conObj= $mydb->openCon();


$result=$mydb->showAll($conObj,'patientdb');

if($result->num_rows > 0)
{
foreach($result as $row)
{
    
    $patientID=$row["patientID"];

    $firstName=$row["firstName"];
    
    $lastName=$row["lastName"];
    
    $age=$row["Age"];
    
    $weight=$row["Weight"];
    
    $contact=$row["contact"];
    
    $gender=$row["gender"];
    
    $previousPrescription=$row["previousPrescription"];
    $message=$row["message"];



  
    
}

}
else
{

  $dataError="Data is not load";
}
$mydb->closeCon( $conObj);


// if (isset($_POST['search'])) {
//   $searchTerm = $_POST['search'];

//   $mydb=new mydb();
//   $conObj= $mydb->openCon();

//   // Use your search function
//   $result = search($conn, 'patientdb', 'patientID', $searchTerm);

//   // Close the database connection
//   $mydb->closeCon( $conObj);

//   // Display the search results
//   if ($result->num_rows > 0) {
//       echo '<ul>';
//       while ($row = $result->fetch_assoc()) {
//           // Display other relevant columns as needed
//           echo '<li>' . $row['your_column'] . '</li>';
//       }
//       echo '</ul>';
//   } else {
//       echo 'No results found.';
//   }
// }

// if(isset($_POST['delete']))
// {
  // $dlID=$_POST['patientID'];
  // $mydb=new mydb();
  // $conn= $mydb->openCon();
  // $result = search($conn, 'patientdb', 'patientID', $dlID);
  // if($result)
  // {
  //   echo "done";
  // }
  // else
  // {
  //   echo "not";
  // }
// }

if (isset($_POST["patientID"]))
{ echo "working";
  $patientID = $_POST["patientID"];
    if (empty($patientID))
    {
        echo "Please enter patientID Number.";
    }
    else
    {
        $mydb = new mydb();
        $conn = $mydb->openCon();
        $result = $mydb->delete($conn, "patientDB","patientID",$patientID);
        if ($result)
        {
          echo "deleted";

        }
        else
        {
          echo "not deleted";
        }
      }
    }

$ferror=null;

    if (isset($_POST["fname"]))
{
    $fname = $_POST["fname"];
    if (empty($fname))
    {
        $ferror = "Please enter PatientID.";
    }
    else
    {
        $mydb = new mydb();
        $conn = $mydb->openCon();
        $result = $mydb->viewPatient($conn,"patientDB", $fname);
        if ($result)
        {
            echo "Patient Information:<br>";
            echo "Name: " . $result['firstName'] . " " . $result['lastName'] . "<br>";
     
        }
        else
        {
            $ferror= "Patient not found.";
        }
 
        function closeCon($conobj)
        {
            return $conobj->close;
        }
    }
}

?>