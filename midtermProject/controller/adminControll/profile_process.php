<?php
session_start();
if(empty($_SESSION['uname']))
{
    header("Location: ../../view/adminView/login.php");
}
?>