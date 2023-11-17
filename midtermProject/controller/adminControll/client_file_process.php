<!DOCTYPE html>
<html>
<head>
  <title>Create File</title>
</head>
<body>

<?php
$uError ="";
if (isset($_POST['create'])) 
{
    $usernameToDisplay = $_POST['uname'];
    $jsonData = file_get_contents('../../data/adminData.json');
    $phpdata = json_decode($jsonData, true);
    $userFound = false;
    foreach ($phpdata as $data) 
    {
        if ($data['UserName'] === $usernameToDisplay) 
        {
            $userFound = true;
            echo '<h1>User Information</h1>';
            echo '<p>Name: ' . $data['UserName'] . '</p>';
            echo '<p>Email: ' . $data['Email'] . '</p>';
            echo '<p>Phone Number: ' . $data['Phone Number'] . '</p>';
            echo '<p>Gender: ' . $data['Gender'] . '</p>';
            echo '<p>Address: ' . $data['Address'] . '</p>';
            break;
        }
        elseif (!$userFound) 
        {
            echo '<p>User ' . $usernameToDisplay . ' not found.</p>';
        }
    }
    if (empty($uname)) 
        {
            $uError = "Please enter a username.";
        } 
}
?>

</body>
</html>
