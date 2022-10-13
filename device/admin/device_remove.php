

<?php

class delete{

  public function delete_data ($id){
    $con = mysqli_connect("localhost","root","","device");
    $query = "DELETE FROM device WHERE id=".$id;
    mysqli_query($con,$query);

  }
}
$removeobj = new delete;
$deleteid = $_POST['id'];
 



// $connect= mysqli_connect('localhost','root','','device');
// $sql="select * from employee where device='$deleteid'";
// $check=mysqli_query($connect,$sql);
// $row = mysqli_fetch_assoc($check);
// if($row <= 0){

 $removeobj -> delete_data($deleteid);
     
// }
// else{
       
//           echo true;
// }

// $removeobj -> delete_data($deleteid);




?>