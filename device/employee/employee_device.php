
<?php


  include 'employee_header.php';

  $conn = mysqli_connect("localhost", "root", "", "device");


  $limit = 5;
  $_SESSION['limit'] = $limit;
  $colunm = "";  // Number of entries to show in a page.
  // Look for a GET variable page if not found default is 1.     
  if (isset($_GET["page"])) { 
    $pn  = $_GET["page"]; 
  } 
  else { 
    $pn=1; 
  };  
  
  $start_from = ($pn-1) * $limit;  
  $_SESSION['start_from']= $start_from;  


  include '../class/employee_device.php';

  $employee_device_obj = new Employee_device;
  $search_result = $employee_device_obj -> dragdata('device');



?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">

<link  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>


<link rel="stylesheet" href="style.css">
</head>
<body > 


<!--  -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="style.css">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link rel="stylesheet" href="style.css">

</head>
<body>

</div>
</div>
</div>

<!-- --------------------------------------- -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="style.css">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link rel="stylesheet" href="style.css">

</head>
<body>

</div>
</div>
</div>
</body>
</html>

</body>
</html>
<!-- --------------------------------------- -->


<div class="container-fluid mt-5 rounded ms-5 me-5 " id="form"  ><br>
<div class="text-center d-flex justify-content-end">
    <form  class="form-inline d-flex bg-defult "  action="employee_device.php" method="get">
        <?php

if (isset($_SESSION["searchdata"])){
   echo  "<input class='form-control rounded ' id='youhave' type='text' name='valueToSearch'  placeholder='Value To Search'  ;>";

}
else{
    echo  "<input id='youhave' type='text' name='valueToSearch' placeholder='Value To Search'   ;' >";

}



?>
                <!-- <input class="form-control  me-3" type="search" placeholder="Search" aria-label="Search"> -->
                <!-- <input class="btn btn-success my-2 my-sm-0 " type="submit">Search</input> -->
            <input class="btn btn-success my-2 my-sm-0 ms-3 " type="submit" name="search" value="search" class="submitbtn">
            </form>
            </div>


<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#searchtable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>




<div class="table-responsive">
<table class="table mt-3 rounded" id="editableTable">
<thead class="bg-dark">
  <tr class="text-white">
    <th scope="col">Id</th>
    <th scope="col"><?php echo '<a class="up" href="employee_device.php?sort=ASC&colunm=type&valueToSearch='.$_SESSION['search'].'&page='.$pn.'" name="type_up" >↑</a>Device Type<a class="type_down" href="employee_device.php?sort=DESC&colunm=type&valueToSearch='.$_SESSION['search'].'&page='.$pn.'">↓</a>'?></th>
    <th scope="col"><?php echo '<a class="up" href="employee_device.php?sort=ASC&colunm=name&valueToSearch='.$_SESSION['search'].'&page='.$pn.'">↑</a>Device name<a class="name_down" href="employee_device.php?sort=DESC&colunm=name&valueToSearch='.$_SESSION['search'].'&page='.$pn.'">↓</a>'?></th>

    <th scope="col"><?php echo '<a class="up" href="employee_device.php?sort=ASC&colunm=status&valueToSearch='.$_SESSION['search'].'&page='.$pn.'">↑</a>status<a class="status_down" href="employee_device.php?sort=DESC&colunm=status&valueToSearch='.$_SESSION['search'].'&page='.$pn.'">↓</a>'?></th>
    <th></th>
    <th></th>

    
  </tr>
</thead>
<tbody id="searchtable">
<?php
   $employee_device_obj1 = new drag;
  $data = $employee_device_obj1 -> dragdata('device');

  // $search_result = $employee_device_obj -> dragdata('device');
  
   $n =1;
    while($row = mysqli_fetch_array($data)):?>
    <tr id="trhover">
        
        <td ><div class="id"><?php echo $n;?></div></td>
        <td ><div class="type"><?php echo $row['type'];?></div></td>
        <td ><div class="fname"><?php echo $row['d_name'];?></div></td>
       
        <td ><div class="status"><?php echo $row['status'];?></div> </td>
        <td>
        <?php
        if($row['status'] == 'Available'){?>
          <td><a id='<?php echo $row['id']; ?>'  class='edit' name='edit' ><span> <button id='<?php echo $row['id']; ?>' class=" request btn-success rounded"> REQUEST </button></span></a></td>
        <?php
        }
        else{
          echo '<td></td>';
        }
        ?>
                                
    </tr>
    <?php $n++; endwhile;?>
</tbody>

</table>

<?php

$conn = mysqli_connect("localhost","root","","device");
$email = $_SESSION['email'];
$query = "select id from user WHERE email = '$email' and role = 'employee'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);
$employee_id_fetched = $row['id'];


?>

<script>
     


  $(document).on('click', '.request', function(){
    var el = this;
    var empid = <?php echo $employee_id_fetched; ?>;
    console.log(empid);

// Delete id
    var requestid = $(this).attr('id');
    console.log(requestid);
    var confirmalert = confirm("Are you sure?");
    if (confirmalert == true) {
// AJAX Request
      $.ajax({
        url: 'request_device.php',
        type: 'POST',
        data: { id:requestid, employee_id:empid },
        success: function(response){

          window.location.href="employee_device.php";

        }
      });
    }

});
</script>
</div>

<ul class="pagination" >
      <?php  
      $colunm =$_SESSION['employee_device_colunm'];
      
      $sort=$_SESSION['employee_device_sort'];
      $search = $_SESSION['search'];





        if(isset($_SESSION['search']))
        {
            $valueToSearch = $_SESSION['search'];
            $sql = "SELECT COUNT(*) FROM device WHERE CONCAT(`type`, `d_name`, `status`) LIKE '%".$_SESSION['search']."%'   ";
        }
        else{
        $sql = "SELECT COUNT(*) FROM users";  
        }

        
        
        $rs_result = mysqli_query($conn,$sql);  
        $row = mysqli_fetch_row($rs_result);  
      
        $total_records = $row[0];  
          
        // Number of pages required.
        $total_pages = ceil($total_records / $limit);  
        $pagLink = "";                        
        for ($i=1; $i<=$total_pages; $i++) {
            if ($i==$pn) {
                $pagLink .= "<li id='active'class='active'style='  color:#000000; border-radius:100%;'><a id='pagelink' href='employee_device.php?page="
                                                  .$i."&colunm=".$colunm."&sort=".$sort."&valueToSearch=".$search."'>".$i."</a></li>";
                                                  $_SESSION['numofpage']=$i;
            }            
            else  {
                $pagLink .= "<li><a id='pagelink' href='employee_device.php?page=".$i."&colunm=".$colunm."&sort=".$sort."&valueToSearch=".$search."'>
                                                  ".$i."</a></li>";  
            }
        }  
        
        $b=$_SESSION['numofpage'];
        if($b>1){
            echo "<a id='pagelink' href='employee_device.php?page=".($b-1)."&colunm=".$colunm."&sort=".$sort."&valueToSearch=".$search."'>⇤</a>";

        }
        echo $pagLink;  
        if($b<$total_pages)
        {
            echo "<a id='pagelink' href='employee_device.php?page=".($b+1)."&colunm=".$colunm."&sort=".$sort."&valueToSearch=".$search."'>⇥</a>";
            
        }
        
       
        
      ?>
      

      </ul><br>
</div>
</div>
</body>
</html>
