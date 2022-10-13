<?php

class courseUpload {
    
   
    public function uploadcourse($table){
        
    require('database.php');
    
       



        
    if ($table == 'device') {

        $name = ($_POST['name11']);
        $type = ($_POST['type11']);
       
        $status = ($_POST['status11']);
        $id = $_POST['id'];
        $query    = "UPDATE $table SET type = '$type', name='$name',status='$status' where id='$id'";
                     
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

if(isset($_POST['submit1'])){
    $courseobj -> uploadcourse('device');
}

?>