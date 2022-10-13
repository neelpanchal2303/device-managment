



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
    session_start();
    require('database.php');
    
    
    
    
    if (isset($_POST['email'])) {
        $email = ($_POST['email']);   
        
        $password =($_POST['password']);
        
        // user database maa che k nai check
        $query    = "SELECT * FROM `user` WHERE email='$email' 
                     AND password='" .md5 ($password) . "'AND role='admin'";
        $result = mysqli_query($conn, $query) or die(mysqli_connect_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            
            $_SESSION['admin_email'] = $email;
            
           
            
            // suuccess message print
            header("Location: mainpage1.php");
        } else {
            echo "<div class='container mt-5 ' id='form1'>
                  <h3 class='d-flex justify-content-center'>Incorrect Username/password. or you don't have authority to access</h3><br/>
                  <p class='d-flex justify-content-center'>Click here to &nbsp<a href='login.php'>Login</a>&nbsp  again.</p>
                  </div>";
        }
    } else {
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
  <form  method="post" name="login" >
  <div class="container mt-3">
    <div class="row d-flex justify-content-center align-self-center">
    <div class="col-md-9 col-lg-7">
            <div class="card px-5 py-5" id="form1">
            
                <div class="form-data" v-if="!submitted">
                
                    <div class="forms-inputs mb-4">  <input name="email" type="text" class="form-control" placeholder="enter username" >
                        <div class="invalid-feedback">A valid email is required!</div>
                    </div>
                    <div class="forms-inputs mb-4">  <input name="password" class="form-control" type="password" placeholder="enter password" maxlength="10" >
                        <div class="invalid-feedback">Password must be 8 character!</div>
                    </div>
                    <div class="mb-3"> <button name="submit"  class="btn btn-dark w-100" >Login</button> </div>
                </div>
                <div class="success-data" v-else>
                    <div class="text-center d-flex flex-column">  <span class="text-center fs-1"><a>Create new account &nbsp</a><a href="registration.php">Sign Up :)</a><a>&nbsp;</a></span> </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
  <?php
    }
?>
    
    
</body>
</html>