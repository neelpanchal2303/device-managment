<?php

class courseUpload {
    
   
    public function uploadcourse($table){
        
    require('database.php');
    
       



        
    if ($table == 'user') {

      $name = ($_POST['name1']);
      $email = ($_POST['email1']);

      $phone = ($_POST['phone1']);
      $doj = ($_POST['doj1']);
      $role = ($_POST['role1']);
       

        $id = $_POST['id'];
        $query    = "UPDATE $table SET name='$name',email='$email',phone='$phone',doj='$doj',role='$role'where id='$id'";
                     
         mysqli_query($conn, $query);
        
          echo "<script>window.location.href='employee.php'</script>";

  
    
     }
    }
}

$courseobj = new courseUpload;

if(isset($_POST['submit111'])){
    $courseobj -> uploadcourse('user');
    echo"hello";
}

?>