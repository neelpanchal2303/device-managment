<?php


class drag{
    public function dragdata(){
        // session_start();
        $connect = mysqli_connect("localhost", "root", "", "device");
        // $sortquery = "SELECT * FROM $table" ;
        $email=$_SESSION['email'];
        // echo $email;

        $query ="SELECT * FROM device_record WHERE employee_id = ANY (SELECT id from user Where email = '$email' AND role = 'employee') ";

            $filter_result = mysqli_query($connect, $query);
             return $filter_result;
    }
}

$dragobj = new drag;

?>
