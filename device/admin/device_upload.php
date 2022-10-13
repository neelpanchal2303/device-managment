<?php

class courseUpload {
    
   
    public function uploadcourse($table){
        
    require('database.php');
    // When form submitted, data->databa
        // removes backslashes
       



        
    if ($table == 'device') {

        $name = ($_POST['name']);
        $type = ($_POST['type']);
       
        $status = ($_POST['status']);
        
        $query    = "INSERT into `device` (type,name,status)
                     VALUES ('$type','$name', '$status')";
                     
         mysqli_query($conn, $query);
        // if ($result){
          echo "<script>window.location.href='device.php'</script>";

        // }
      //   if ($result) {
      //       echo "<div class='form'>
      //             <h3>You are registered successfully.</h3><br/>
                  
      //             <p class='link'>Click here to <a href='employeetable.php'>Login</a></p>
      //             </div>";}
      //   else {
      //       echo "<div class='form'>
      //                   <h3>Required fields are missing.</h3><br/>
      //             <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
      //                        </div>";
      //  }
    
     }
    }
}

$courseobj = new courseUpload;

if(isset($_POST['registersubmit'])){
    $courseobj -> uploadcourse('device');
}

?>