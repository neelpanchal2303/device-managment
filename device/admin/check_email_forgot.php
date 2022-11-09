<?php


if(isset($_POST['email'])){
    $searchVal1 = $_POST['email'];
    $dbh = mysqli_connect('localhost','root','','device');

    $sql = "SELECT email FROM user WHERE email = '$searchVal1'";
    $stmt = mysqli_query($dbh,$sql);

   if(mysqli_num_rows($stmt)>0){
    echo "true";
   }  
   else{
    echo "false";
   }
}


?>