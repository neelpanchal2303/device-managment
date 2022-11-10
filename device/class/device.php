<?php


class Device{
    
    public function dragdata(){
        $_SESSION['colunm']='';
            $_SESSION['sort']='' ;


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
            $_SESSION['colunm']=$colunm;
            $_SESSION['sort']=$sort;
            
            
                $connect = mysqli_connect("localhost", "root", "", "device");
                // $sortquery = "SELECT * FROM device  order by  $colunm $sort";
                $sortquery = "SELECT * FROM device WHERE CONCAT(`type`,`d_name`,`status`) LIKE '%".$_SESSION['search']."%' order by $colunm $sort  LIMIT $start_from, $limit";
                
                // $search_result = mysqli_query($connect,$sortquery);
           
            

        }
        else{
            $sortquery = "SELECT * FROM device WHERE CONCAT(`type`, `d_name`, `status`) LIKE '%".$_SESSION['search']."%' LIMIT $start_from, $limit" ;
        }
        $search_result = mysqli_query($connect,$sortquery);
        return $search_result;
    }

    /////////////////////////
    // public function drag_data_history(){


    //     $limit = $_SESSION['limit'];
    //     $start_from = $_SESSION['start_from'];
        
        
    //             $connect = mysqli_connect("localhost", "root", "", "device");
    //             $_SESSION['search'] = '';
    //             if(isset($_GET['valueToSearch'])){
    //                 $_SESSION['search'] = $_GET["valueToSearch"];
    //             }
        
    //             if(isset($_GET['sort'])){
    //                 $sort = $_GET['sort'];
    //                 $colunm = $_GET['colunm'];
    //                 $_SESSION['colunm']=$colunm;
    //                 $_SESSION['sort']=$sort;
                    
                    
    //                     $connect = mysqli_connect("localhost", "root", "", "device");
    //                     // $sortquery = "SELECT * FROM device  order by  $colunm $sort";
    //                     $sortquery2 = "SELECT * FROM device_record WHERE CONCAT(`device_id`,`request_time`,`assigned_time`,`return_time`,`reject_time`,`employee_id`,`status`) LIKE '%".$_SESSION['search']."%' order by $colunm $sort  LIMIT $start_from, $limit";
                        
    //                     // $search_result = mysqli_query($connect,$sortquery);
                   
                    
        
    //             }
    //             else{
    //                 $sortquery2 = "SELECT * FROM device_record WHERE CONCAT(`device_id`, `request_time`, `assigned_time`,`return_time`,`reject_time`,`employee_id`,`status`) LIKE '%".$_SESSION['search']."%' LIMIT $start_from, $limit" ;
    //             }
    //             $search_result2 = mysqli_query($connect,$sortquery2);
    //             return $search_result2;
    //         }
    /////////////////////////

    public function fetchdevice($table,$id1){
         //fetch.php  
        if($table == 'device'){
            $connect = mysqli_connect("localhost", "root", "", "device");  
            
               
                $query = "SELECT * FROM device_record WHERE id = '".$id1."'";  
                 $result = mysqli_query($connect, $query);  
                 $row = mysqli_fetch_array($result);  
                 echo json_encode($row);  
            
        }
 
    }

    // upload

    public function uploaddevice($table){
        require('database.php');
        if ($table == 'device') {
            $name = ($_POST['name']);
            $type = ($_POST['type']);
            $status = ($_POST['status']);
            $query    = "INSERT into `device` (type,d_name,status)VALUES ('$type','$name', '$status')";
            mysqli_query($conn, $query);
            echo "<script>window.location.href='../admin/device.php'</script>";
        }
    }

        // Update

    public function updatedevice($table){
        require('database.php');
        if ($table == 'device') {
            $name   = ($_POST['name11']);
            $type   = ($_POST['type11']);
            $status = ($_POST['status11']);
            $id     = $_POST['id'];
            $query  = "UPDATE $table SET type = '$type', d_name='$name',status='$status' where id='$id'";
            mysqli_query($conn, $query);
            echo "<script>window.location.href='../admin/device.php'</script>";
        }
    }

            // delete
    public function deletedevice($table,$id){
        if($table == 'device'){
            $con = mysqli_connect("localhost","root","","device");
            $query = "DELETE FROM device WHERE id=".$id;
            mysqli_query($con,$query);
            echo "<script>window.location.href='../admin/device.php'</script>";
        }
    }
}
/////////////////////////////////
class history{
    
}
////////////////////////////////
   
// object

$deviceobj = new Device;



if(isset($_POST['registersubmit'])){
    $deviceobj -> uploaddevice('device');
}

if(isset($_POST['submit1'])){
    $deviceobj -> updatedevice('device');
}

if(isset($_POST['resultid'])){
    $resultid = $_POST['resultid'];
    $deviceobj -> fetchdevice('device',$resultid);
}

if(isset($_POST['deleteid'])){
    $deleteid = $_POST['deleteid'];
    $deviceobj -> deletedevice('device',$deleteid);
}

if(isset($_GET['type_up'])){
    $sort = $_GET['sort'];
    $sortobj -> dragdata('device',$sort);
}
?>


