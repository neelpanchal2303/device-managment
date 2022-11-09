<?php

session_start();
if(isset($_POST['id'])){
    $requestid = $_POST['id'];
    $employeeid1 = $_POST['employee_id'];
    $email = $_SESSION['employee_email'];
  

    $conn = mysqli_connect("localhost","root","","device");
    $add_query    = "INSERT into `device_record` (device_id,request_time,employee_id,status)
    VALUES ('$requestid',now(),'$employeeid1','Requested')";
    $edit_query    = "UPDATE device SET status = 'Requested' where id='$requestid'";
                     
    mysqli_query($conn, $add_query);
    
mysqli_query($conn, $edit_query);

$email1 = 'panchalneel03@gmail.com';
$to = $email1;
    $subject = "You got request from   ";
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
            <h1 style=" display:flex; justify-content:center; color: rgb(119, 153, 185);"><u>'.$email.' has Requested you for Device Request</u></h1><br>
            <h3 style=" display:flex; justify-content:center; color:rgb(151, 190, 226); "><i>hii we are from MN Panchal & industries you have requested for reset password </p><br>
            <h3 style=" display:flex; justify-content:center; color:rgb(151, 190, 226);">click on RESET PASSWORD to reset your password</p>
            <button style=" margin-left:35%; background-color:rgb(151, 190, 226);; width:30%; height:50px; border-radius:10px; " ><a href="http://localhost/test/device/admin/device.php">Reset Password</a></button>
            </div>
    </div>
    </body>
    </html>';

    $headers = "Content-type:text/html;charset=UTF-8" . "\r\n";

    $send = mail($to,$subject,$html,$headers);

    
}

    



?>