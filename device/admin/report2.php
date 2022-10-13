<?php



// echo "your name is:-         ".$name. "<br>";
// echo "your contact no is:-   ".$contact. "<br>";
// echo "your email address is:-".$email. "<br>";
// echo "your address is:-      ".$address. "<br>";
// echo "your gender is:-       ".$gender. "<br>";
// echo "your selected file:-   ".$file. "<br>";
// echo "your DOB is:-          ".$dob. "<br>";
// echo "your DOJ is:-          ".$doj. "<br>";
// echo "your age is:-          ".$age. "<br>";
// echo "your bio is:-          ".$bio. "<br>";
// echo "your job is:-          ".$job. "<br>";
// foreach($_POST["hobby"] as $hobbyvalue ){
//     echo "your interest :-" .$hobbyvalue.'<br>';
// }











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



 ///////////////////////////////////////
//  if(isset($_POST['check_Emailbtn'])){
//      $email = $_POST['email'];
//      $connn = mysqli_connect('localhost','root','','test');
//      $checkemail = "SELECT email FROM form WHERE email='$email' ";
//      $checkemail_run = mysqli_query($connn, $checkemail);
//      if(mysqli_num_rows($checkemail_run)>0){
//          echo "email is already taken";
//      } 
//      else{
//          echo "availablee";
//      }
//  }




















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

















 //////////////////
//   $strhobby= implode(',',$hobby)
  











?>