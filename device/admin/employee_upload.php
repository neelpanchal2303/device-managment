<?php

class studentUpload {
    
   
    public function uploadstudent($table){
        
    require('database.php');
    // When form submitted, data->databa
        // removes backslashes
       



        
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

$studentobj = new studentUpload;

if(isset($_POST['registersubmit'])){
    $studentobj -> uploadstudent('user');
}


?>