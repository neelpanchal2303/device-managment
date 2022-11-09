<?php

class studentUpload {
    
   
    public function uploadstudent($table){
        
    require('database.php');
  
       



        
    if ($table == 'user') {

        $name = ($_POST['name']);
        $email = ($_POST['email']);
        $password = ($_POST['password']);
        $phone = ($_POST['phone']);
        $doj = ($_POST['doj']);
        $role = ($_POST['role']);
        

       
        
        
        $query    = "INSERT into `user` (name,email,password,phone,doj,role)
                     VALUES ('$name','$email','" .md5($password)."','$phone','$doj','$role')";
                     
         mysqli_query($conn, $query);
     
          echo "<script>window.location.href='employee.php'</script>";

     
      
    
     }
    }
}

$studentobj = new studentUpload;

if(isset($_POST['registersubmit'])){
    $studentobj -> uploadstudent('user');
}


?>