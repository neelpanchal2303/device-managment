<?php



if(isset($_POST['phone'])){
    $searchVal1 = $_POST['phone'];
    $dbh = mysqli_connect('localhost','root','','device');

    $sql = "SELECT phone FROM user WHERE phone = '$searchVal1'";
    $stmt = mysqli_query($dbh,$sql);

   if(mysqli_num_rows($stmt)>0){
    echo "false";
   }  
   else{
    echo "true";
   }
}


if(isset($_POST['submit'])){
 $conn = mysqli_connect('localhost','root','','loginsystem');
 $name=$_POST["username"];

 $email=$_POST["email"];
 

$sqli="insert into form(username,email)
 values('$name','$email')";
 $rs = mysqli_query($conn,$sqli);
 if($rs){
     echo"contact records inserted";
     header("Location: registration.php");
 }

}






?>