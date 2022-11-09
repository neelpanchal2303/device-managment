<?php


// class drag{
//     public function dragdata(){
        
//         $connect = mysqli_connect("localhost", "root", "", "device");
        
//         $email=$_SESSION['employee_email'];
        

//         $query ="SELECT * FROM device WHERE status= 'Requested' AND id = ANY (SELECT device_id FROM device_record WHERE employee_id= ANY(SELECT id FROM user WHERE email='$email'));";

//             $filter_result = mysqli_query($connect, $query);
//              return $filter_result;
//     }
// }

// $dragobj = new drag;

?>
