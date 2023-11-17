<?php
$delError = "";
if(isset($_REQUEST["del"]))
{
    $uname = $_POST["uname"];
        if (!empty($uname)) 
        {
            echo "User $uname deleted successfully!";
        } 
        else 
        {
            $delError = "Please enter a username to delete.";
        }
    
}
?>
