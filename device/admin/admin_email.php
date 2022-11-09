<?php
if(isset($_POST['email'])){

    $email = $_POST['email'];
    $to = $email;
    $subject = "Forgot your password from here";
    $html = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            a{
                text-decoration: none;
            }
            button{
                border: none;
            }
        </style>
    </head>
    <body style="background-color: rgb(48, 67, 85);">
    <?php echo $email; ?>
        <div style=" display:flex; flex-direction:column; justify-content:center; ">
            <div style=" height: 500px; width:700px; margin-left:35%; margin-top:10%;">
            <h1 style=" display:flex; justify-content:center; color: rgb(119, 153, 185);"><u>You have Requested for Forgot Password</u></h1><br>
            <h3 style=" display:flex; justify-content:center; color:rgb(151, 190, 226); "><i>hii we are from Devstree & you have requested for reset password </p><br>
            <h3 style=" display:flex; justify-content:center; color:rgb(151, 190, 226);">click on RESET PASSWORD to reset your password</p>
            <button style=" margin-left:35%; background-color:rgb(151, 190, 226);; width:30%; height:50px; border-radius:10px; " ><a href="http://localhost/test/device/admin/admin_reset.php?email='.$email.'">Reset Password</a></button>
            </div>
    </div>
    </body>
    </html>';

    $headers = "Content-type:text/html;charset=UTF-8" . "\r\n";

    $send = mail($to,$subject,$html,$headers);

    if($send){
        header("Location:login.php");
    }
    else{
        echo "server not available";
    }
    
}



?>