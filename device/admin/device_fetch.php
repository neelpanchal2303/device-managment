
<?php
 



 $connect = mysqli_connect("localhost", "root", "", "device");  
 if(isset($_POST["resultid"]))  
 {  
    
     $query = "SELECT * FROM device WHERE id = '".$_POST["resultid"]."'";  
      $result = mysqli_query($connect, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 }
 
 
 ?>

