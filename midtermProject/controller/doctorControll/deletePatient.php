<?php
  include '../../model/mydb.php';

  if($_SERVER['REQUEST_METHOD'] === 'POST')
  {
     $cid=$_POST['id']; 
 
     $mydb = new mymanagerdb();
     $conn= $mydb->opencon();
     $result= $mydb->delete($conn, 'patientdb', 'patientID', $cid);
     if($result===true)
     {
        echo "success";
      
     }
     else
     {
        echo "error";
     }

     function closeCon($conobj)
     {
      return $conobj->close;
     }
   }
    
?>