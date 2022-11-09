<?php
include 'database.php';

class permission{
    function grant($id,$status){

        $conn = mysqli_connect("localhost","root","","device");

        if($status=="accept"){
            
            $query_update_status_device1 = "UPDATE device SET status = 'assigned' WHERE id = ANY(SELECT device_id from device_record WHERE id='$id')";
            $query_update_assigned_time = "UPDATE device_record SET status = 'assigned',assigned_time = now() where id='$id' ";
        }

        if($status=="rejected"){
            echo 'reject';
            $query_update_status_device1 = "UPDATE device SET status = 'Available' WHERE id = ANY(SELECT device_id from device_record WHERE id='$id')";
            $query_update_assigned_time = "UPDATE device_record SET status = 'rejected',reject_time = now() where id='$id' ";
        }
        if($status=="returned"){
            echo 'reject224';
            $query_update_status_device1 = "UPDATE device SET status = 'Available' WHERE id = ANY(SELECT device_id from device_record WHERE id='$id')";
            $query_update_assigned_time = "UPDATE device_record SET status = 'returned',retrurn_time = now() where id='$id' ";
        }

        if($status=="requested"){
            $query_update_status_device1 = "UPDATE device SET status = 'Requested' WHERE id = ANY(SELECT device_id from device_record WHERE id='$id')";
            $query_update_assigned_time = "UPDATE device_record SET status = 'Requested',requested_time = now() where id='$id' ";
        }


        $true = mysqli_query($conn,$query_update_status_device1);
        $true1 =mysqli_query($conn,$query_update_assigned_time);
  

        if($true and $true1 ){
            echo 'true';
        }
        else{
            echo 'false';
        }
        

    }
}



$permissionobj = new permission;


if(isset($_POST['status'])){
    $id = $_POST['id'];
    $status = $_POST['status'];
    $permissionobj->grant($id,$status);

}
?>