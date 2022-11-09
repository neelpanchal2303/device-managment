<?php
include 'database.php';

class permission{

    public function dragdata(){
        $connect = mysqli_connect("localhost", "root", "", "device");
        $_SESSION['search'] = '';
        if(isset($_GET['valueToSearch'])){
            $_SESSION['search'] = $_GET["valueToSearch"];
        }
        

        $limit = $_SESSION['limit'];
        $start_from = $_SESSION['start_from'];

        if(isset($_GET['sort'])){
            $sort = $_GET['sort'];
            $_SESSION['device_record_sort'] = $sort;
            $colunm3 = $_GET['colunm'];
            $_SESSION['device_record_colunm'] = $colunm3;
            
            
                $connect = mysqli_connect("localhost", "root", "", "device");
                $sortquery = "SELECT * FROM device_record WHERE CONCAT(`request_time`,`assigned_time`,`return_time`,`reject_time`,`status`) LIKE '%".$_SESSION['search']."%' order by $colunm3 $sort LIMIT $start_from, $limit";
                
        }
        else{
            // $sortquery = "SELECT * FROM device_record WHERE CONCAT(`request_time`,`assigned_time`,`return_time`,`reject_time`,`status`) LIKE '%".$_SESSION['search']."%' LIMIT $start_from, $limit" ;
            $sortquery = "SELECT user.name, user.id, device_record.id, device.d_name, device_record.device_id, device_record.request_time,device_record.assigned_time,device_record.return_time,device_record.reject_time,device_record.status,device_record.employee_id FROM device_record inner join device on device.id=device_record.device_id inner join user on user.id=device_record.employee_id WHERE CONCAT(`d_name`,`name`,`request_time`,`assigned_time`,`return_time`,`reject_time`) LIKE '%".$_SESSION['search']."%' LIMIT $start_from, $limit" ;
        }
        $search_result = mysqli_query($connect,$sortquery);
        return $search_result;
    }

    // 
    // public function drag_data_history(){
    //     $connect = mysqli_connect("localhost", "root", "", "device");
    //     $_SESSION['search'] = '';
    //     if(isset($_GET['valueToSearch'])){
    //         $_SESSION['search'] = $_GET["valueToSearch"];
    //     }
        

    //     $limit = $_SESSION['limit'];
    //     $start_from = $_SESSION['start_from'];

    //     if(isset($_GET['sort'])){
    //         $sort = $_GET['sort'];
    //         $_SESSION['device_record_sort'] = $sort;
    //         $colunm = $_GET['colunm'];
    //         $_SESSION['device_record_colunm'] = $colunm;
            
            
    //             $connect = mysqli_connect("localhost", "root", "", "device");
    //             $sortquery = "SELECT * FROM device_record WHERE CONCAT(`request_time`,`assigned_time`,`return_time`,`reject_time`,`status`) LIKE '%".$_SESSION['search']."%' order by $colunm $sort LIMIT $start_from, $limit";
                
    //     }
    //     else{
    //         $sortquery = "SELECT * FROM device_record WHERE CONCAT(`request_time`,`assigned_time`,`return_time`,`reject_time`,`status`) LIKE '%".$_SESSION['search']."%' LIMIT $start_from, $limit" ;
    //     }
    //     $search_result = mysqli_query($connect,$sortquery);
    //     return $search_result;
    // }
    // / / / / / / / / / / / / / / / / / / / / / / / / / / / / / / / / / / / / / / / / / /
    public function drag_data_history(){
        $connect = mysqli_connect("localhost", "root", "", "device");
        $_SESSION['search'] = '';
        //$_SESSION['dropdown_search'] = '';
        if(isset($_GET['valueToSearch'])){
            $_SESSION['search'] = $_GET["valueToSearch"];
        }
        

        $limit = $_SESSION['limit'];
        $start_from = $_SESSION['start_from'];

        if(isset($_GET['sort'])){
            $sort = $_GET['sort'];
            $_SESSION['device_record_sort'] = $sort;
            $colunm = $_GET['colunm'];
            $_SESSION['device_record_colunm'] = $colunm;
            // $_SESSION['dropdown_search'] = "mitul";
            
            
                $connect = mysqli_connect("localhost", "root", "", "device");
                 //$sortquery = "SELECT * FROM device_record WHERE CONCAT(`request_time`,`assigned_time`,`return_time`,`reject_time`) LIKE '%".$_SESSION['search']."%' order by $colunm $sort LIMIT $start_from, $limit";
            //    $sortquery = "SELECT user.name, user.id, device.id, device.d_name, device_record.device_id, device_record.request_time,device_record.assigned_time,device_record.return_time,device_record.reject_time,device_record.status,device_record.employee_id FROM device_record inner join device on device.id=device_record.device_id inner join user on user.id=device_record.employee_id WHERE  name LIKE '%".$_SESSION['dropdown_search']."%' CONCAT(`d_name`,`name`,`request_time`,`assigned_time`,`return_time`,`reject_time`) LIKE '%".$_SESSION['search']."%' LIMIT $start_from, $limit" ;
           $sortquery = "SELECT user.name,device_record.id,device.d_name,device_record.device_id,device_record.request_time,device_record.assigned_time,device_record.return_time,device_record.reject_time,device_record.status,device_record.employee_id FROM device_record inner join device on device.id=device_record.device_id inner join user on user.id=device_record.employee_id WHERE name LIKE  '%".$_SESSION['dropdown_search']."%' AND CONCAT(`d_name`,`name`,`request_time`,`assigned_time`,`return_time`,`reject_time`) LIKE '%".$_SESSION['search']."%'  LIMIT $start_from,$limit" ;
        }
        else{
         
                // $sortquery = "SELECT user.name, user.id, device.id, device.d_name, device_record.device_id, device_record.request_time,device_record.assigned_time,device_record.return_time,device_record.reject_time,device_record.status,device_record.employee_id FROM device_record inner join device on device.id=device_record.device_id inner join user on user.id=device_record.employee_id WHERE  name LIKE '%".$_SESSION['dropdown_search']."%' CONCAT(`d_name`,`name`,`request_time`,`assigned_time`,`return_time`,`reject_time`) LIKE '%".$_SESSION['search']."%' LIMIT $start_from, $limit" ;
            $sortquery = "SELECT user.name, device_record.id, device.d_name, device_record.device_id, device_record.request_time,device_record.assigned_time,device_record.return_time,device_record.reject_time,device_record.status,device_record.employee_id FROM device_record inner join device on device.id=device_record.device_id inner join user on user.id=device_record.employee_id WHERE name LIKE  '%".$_SESSION['dropdown_search']."%' AND CONCAT(`d_name`,`name`,`request_time`,`assigned_time`,`return_time`,`reject_time`) LIKE '%".$_SESSION['search']."%'  LIMIT $start_from, $limit";
        }
        $search_result = mysqli_query($connect,$sortquery);
        return $search_result;
    }
    ////////////////////////////////////////


    public function grant($id,$status){
        $conn = mysqli_connect("localhost","root","","device");
        // echo 'hello'; 
        echo $id; 
        echo $status;
        if($status=="assigned"){
            $query_update_status_device1 = "UPDATE device SET status = 'assigned' WHERE id = ANY(SELECT device_id from device_record WHERE id='$id')";
            $query_update_assigned_time = "UPDATE device_record SET status = 'assigned',assigned_time = now() where id='$id' ";
            // echo 'hello';        
        }

        if($status=="rejected"){
            $query_update_status_device1 = "UPDATE device SET status = 'Available' WHERE id = ANY(SELECT device_id from device_record WHERE id='$id')";
            $query_update_assigned_time = "UPDATE device_record SET status = 'rejected',reject_time = now() where id='$id' ";
        }
        if($status=="returned"){
            $query_update_status_device1 = "UPDATE device SET status = 'Available' WHERE id = ANY(SELECT device_id from device_record WHERE id='$id')";
            $query_update_assigned_time = "UPDATE device_record SET status = 'returned',return_time = now() where id='$id' ";
            // echo 'hello';
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

if(isset($_GET['user_drop'])){
    $drop_value = $_GET['user_drop'];
    $_SESSION['dropdown_search'] = $drop_value;

    // $deviceobj -> drag_data_history();
}
?>
