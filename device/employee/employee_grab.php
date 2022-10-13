<?php


class drag{
    public function dragdata($table){
        $connect = mysqli_connect("localhost", "root", "", "device");
        // $sortquery = "SELECT * FROM $table" ;
        if($table == 'device'){
            $sortquery = "SELECT * FROM $table WHERE status= 'Available'" ;

        }
        else{
            $sortquery = "SELECT * FROM $table" ;
        }
        $search_result = mysqli_query($connect,$sortquery);
        return $search_result;
    }
}

$dragobj = new drag;
?>
