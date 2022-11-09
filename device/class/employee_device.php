<?php

class Employee_device{


    
        public function dragdata($table){
            $limit = $_SESSION['limit'];
            $start_from = $_SESSION['start_from'];
            
            
                    $connect = mysqli_connect("localhost", "root", "", "device");
                    $_SESSION['search'] = '';
                    if(isset($_GET['valueToSearch'])){
                        $_SESSION['search'] = $_GET["valueToSearch"];
                    }
                 
            
                    if(isset($_GET['sort'])){
                        $sort = $_GET['sort'];
                        $colunm = $_GET['colunm'];
                        $_SESSION['employee_device_colunm']=$colunm;
                        $_SESSION['employee_device_sort']=$sort;
                        $email=$_SESSION['email'];
                        
                            $connect = mysqli_connect("localhost", "root", "", "device");
                    
                            // $sortquery = "SELECT * FROM device WHERE CONCAT(`type`, `d_name`, `status`) LIKE '%".$_SESSION['search']."%' order by $colunm $sort  LIMIT $start_from, $limit";
                            $sortquery = "SELECT user.name, user.id, device.id,device.type, device.d_name, device_record.device_id, device_record.request_time,device_record.assigned_time,device_record.return_time,device_record.reject_time,device_record.status,device_record.employee_id FROM device_record inner join device on device.id=device_record.device_id inner join user on user.id=device_record.employee_id WHERE  email = '$email' AND CONCAT(`d_name`,`name`,`request_time`,`assigned_time`,`return_time`,`reject_time`) LIKE '%".$_SESSION['search']."%' ORDER BY $colunm $sort LIMIT $start_from, $limit" ;
                            
                            
                       
                        
            
                    }
                   
                    else{
                        // $colunm = $_SESSION['employee_device_colunm'];
                        // $sort = $_SESSION['employee_device_sort'];
                        $email=$_SESSION['email'];
                        // $sortquery = "SELECT * FROM device WHERE CONCAT(`type`, `d_name`, `status`) LIKE '%".$_SESSION['search']."%' LIMIT $start_from, $limit" ;
                        $sortquery = "SELECT user.name, user.id, device.id,device.type, device.d_name, device_record.device_id, device_record.request_time,device_record.assigned_time,device_record.return_time,device_record.reject_time,device_record.status,device_record.employee_id FROM device_record inner join device on device.id=device_record.device_id inner join user on user.id=device_record.employee_id WHERE  email = '$email' AND CONCAT(`d_name`,`name`,`request_time`,`assigned_time`,`return_time`,`reject_time`) LIKE '%".$_SESSION['search']."%' LIMIT $start_from, $limit" ;
                    }
                    $search_result = mysqli_query($connect,$sortquery);
                    return $search_result;
    }
    
}



class drag{
    public function dragdata($table){
        
        $connect = mysqli_connect("localhost", "root", "", "device");
        
        $email=$_SESSION['email'];
        

        $query ="SELECT * FROM device ";

            $filter_result = mysqli_query($connect, $query);
             return $filter_result;
    }

    public function requested_dragdata($table){
        
        $connect = mysqli_connect("localhost", "root", "", "device");
        
        $email=$_SESSION['email'];
        

        $query ="SELECT * FROM device WHERE status= 'Requested' AND id = ANY (SELECT device_id FROM device_record WHERE employee_id= ANY(SELECT id FROM user WHERE email='$email'));";

            $filter_result = mysqli_query($connect, $query);
             return $filter_result;
    }
}

$deviceobj = new Employee_device;
$deviceobj -> dragdata('device_record');

$dragobj   = new drag;
//        $query ="SELECT * FROM device WHERE status= 'Requested' AND id = ANY (SELECT device_id FROM device_record WHERE employee_id= ANY(SELECT id FROM user WHERE email='$email'));";

 


?>