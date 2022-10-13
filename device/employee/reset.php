<?php


require('database.php');
if(isset($_POST['hidden_email'])){
    $change_password = $_POST['hidden_email'];
    $reset_password = $_POST['new_password'];

    $query    = "UPDATE user SET password = '".md5($reset_password)."' where email='$change_password'";
                     
    mysqli_query($conn, $query);
   // if ($result){
   echo "<script>window.location.href='employee_login.php'</script>";


   }

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" href="style.css"> -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
         body{
    background-color: rgb(48, 67, 85);
 }

 #form1{
    background-color: rgb(89, 126, 161);
 }
 a{
    text-decoration: none;
    color: white;
 }
       
   
        
    </style>


</head>
<body>
    <?php
    
    require('database.php');
    
    
    
    
   
?>

<!-- <form  method="post" name="login" >
        <h1 class="login-title justify-content-center">Login</h1><br>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/><br><br>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link"><a href="registration.php">New Registration</a></p>
  </form> -->
 
  <div style="margin-top:10%;">
  <h1 class="d-flex justify-content-center text-light">Login</h1>
  </div>
  <form  method="post" name="login" id="forgot" action="reset.php">
  <div class="container mt-3">
    <div class="row d-flex justify-content-center align-self-center">
    <div class="col-md-9 col-lg-7">
            <div class="card px-5 py-5" id="form1">
            
                <div class="form-data" v-if="!submitted">
                
                    <div class="forms-inputs mb-4">  <input name="new_password" id="new_password" type="text" class="form-control" placeholder="enter username" >
                        <div class="invalid-feedback">A valid email is required!</div>
                    </div>

                    <input type="hidden" name="hidden_email" value="<?php echo $_GET['email']?>" >

                    <p class="error"></p>
                    
                    <div class="mb-3"> <button name="emailsubmit" type="submit" class="btn btn-dark w-100" >Login</button> </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
</form>
  


    
    
</body>
</html>