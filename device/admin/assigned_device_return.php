<?php

// class permission{
//     function grant($status,$id){

//         $conn = mysqli_connect("localhost","root","","device");

        

//         if($status=="return"){
//             $query_update_status_device = "UPDATE device SET status = 'Available' WHERE id = ANY(SELECT device_id from device_record WHERE id='$id')";
//             $query_update_returneded_time = "UPDATE device_record SET status = 'returned',return_time = now() where id='$id' ";
//         }


//         $true = mysqli_query($conn,$query_update_status_device);
//         $true1 =mysqli_query($conn,$query_update_returneded_time);

//         if($true and $true1){
//             echo 'true';
//         }
//         else{
//             echo 'false';
//         }
        

//     }
// }



// $permissionobj = new permission;

// if(isset($_POST['return'])){
//     $id = $_POST['return'];
//     $permissionobj -> grant('return',$id);
// }


?>