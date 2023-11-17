<?php
session_start();   

if(session_destroy())
{
    
    header("Location:../../view/doctorView/login.php");
}
else
{
    echo "didnot destry";
}

?>