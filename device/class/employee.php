<?php

class Employee{
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
            $_SESSION['employee_sort'] = $sort;
            $colunm = $_GET['colunm'];
            $_SESSION['employee_colunm'] = $colunm;
            
            
                $connect = mysqli_connect("localhost", "root", "", "device");

                $sortquery = "SELECT * FROM user WHERE CONCAT(`name`, `email`,`phone`,`doj`,`role`) LIKE '%".$_SESSION['search']."%' order by $colunm $sort LIMIT $start_from, $limit";
                
            
           
            

        }
        else{
            $sortquery = "SELECT * FROM user WHERE CONCAT(`name`, `email`,`phone`,`doj`,`role`) LIKE '%".$_SESSION['search']."%' LIMIT $start_from, $limit" ;
        }
        $search_result = mysqli_query($connect,$sortquery);
        return $search_result;
    }

    //upload

    public function uploademployee($table){
        
        require('database.php');
      
           
    
    
    
            
        if ($table == 'user') {
    
            $name = ($_POST['name']);
            $email = ($_POST['email']);
            $password = ($_POST['password']);
            $phone = ($_POST['phone']);
            $doj = ($_POST['doj']);
            $role = ($_POST['role']);
            
    
           
            
            
            $query    = "INSERT into `user` (name,email,password,phone,doj,role)
                         VALUES ('$name','$email','" .md5($password)."','$phone','$doj','$role')";
                         
             mysqli_query($conn, $query);
         
              echo "<script>window.location.href='../admin/employee.php'</script>";
    
         
          
        
         }
        }

        // Update

        public function updateemployee($table){
        
            require('database.php');
            
               
        
        
        
                
            if ($table == 'user') {
        
              $name = ($_POST['name1']);
              $email = ($_POST['email1']);
        
              $phone = ($_POST['phone1']);
              $doj = ($_POST['doj1']);
              $role = ($_POST['role1']);
               
        
                $id = $_POST['id'];
                $query    = "UPDATE $table SET name='$name',email='$email',phone='$phone',doj='$doj',role='$role'where id='$id'";
                             
                 mysqli_query($conn, $query);
                
                  echo "<script>window.location.href='../admin/employee.php'</script>";
        
          
            
             }
            }

            public function deleteuser ($table,$id){
                if($table == 'user'){
                    $con = mysqli_connect("localhost","root","","device");
                $query = "DELETE FROM $table WHERE id=".$id;
                mysqli_query($con,$query);
                }
            
              }
}
$employeeobj = new Employee;
if(isset($_POST['registersubmit'])){
    $employeeobj -> uploademployee('user');
}

if(isset($_POST['submit111'])){
    $employeeobj -> updateemployee('user');
}

if(isset($_POST['deleteid'])){
    $deleteid = $_POST['deleteid'];
    $employeeobj -> deleteuser('user',$deleteid);
}
?>