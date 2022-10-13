

<?php

class delete{

  public function delete_data ($id){
    $con = mysqli_connect("localhost","root","","device");
    $query = "DELETE FROM user WHERE id=".$id;
    mysqli_query($con,$query);

  }
}
$removeobj = new delete;
$deleteid = $_POST['id'];
$removeobj -> delete_data($deleteid);




?>