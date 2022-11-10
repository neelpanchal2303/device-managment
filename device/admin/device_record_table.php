
<?php


include 'header.php';


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


include '../class/device_record.php';

$permissionobj = new permission;
$search_result = $permissionobj -> dragdata('device_record');


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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
  <link  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body> 

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

<div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel "aria-hidden="true" style="width: 100%;">
  <div class="modal-dialog " role="document" style="width: 2000px;" >
    <div class="modal-content col-md-12 col-lg-12 " style="width: 100%; border:none;" id="form1">
      <div style="margin-top:10%;" style="width: 100%;">
        <h1 class="d-flex justify-content-center text-light">Registration</h1>
      </div>
      <form  method="post" name="myform" id='myform' style="width: 100%; border:none;"  action="device_upload.php">
        <div class="container mt-3 ">
          <div class="row d-flex justify-content-center align-self-center md-7" style="margin: left 4px;;">
            <div class="col-md-12 col-lg-12 ">
              <div class="card  " id="form1" style="border:none;">
                <div class="forms-inputs mb-4"> 
                  <label for="status">Device Type</label>
                  <select name="type" id="type" required class=" form-select ">
                    <option value="please select appropriate Device type" selected disabled>please select appropriate role</option>
                    <option value="Laptop">Laptop</option>
                    <option value="Desktop">Desktop</option>
                    <option value="Phone">Phone</option>
                  </select>
                </div>
                <div class="forms-inputs mb-4"> 
                  <label class="form-lable" for="fname">Device name</label> 
                    <input name="name" id="name" type="text" class="form-control" placeholder="enter cource name" >
                </div>
      
                <div class="forms-inputs mb-4"> 
                  <label for="status">status</label>
                  <select name="status" id="status" required class=" form-select ">
                    <option value="Available">Available</option>
                    <option value="Requested">Requested</option>
                    <option value="Unavailable">Unavailable</option>
                  </select>
                </div>
                <div class="mb-3"> 
                  <button name="registersubmit" type="submit" id="registerinsert"  class="btn btn-dark w-100" >Register</button>
                </div>
  
  
              </div>
            </div>
          </div>
        </div>
      </form>

      <script>
        jQuery('#myform').validate({
          rules:{
            type:{required:true},
            name:{required:true},
            status:{required:true},
          },
        });
      </script>
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

<div class="modal fade" id="editform" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"aria-hidden="true" style="width: 100%;">
  <div class="modal-dialog " role="document" style="width: 2000px;" >
    <div class="modal-content col-md-12 col-lg-12 " style="width: 100%; border:none;" id="form1">
      <div style="margin-top:10%;" style="width: 100%;">
        <h1 class="d-flex justify-content-center text-light">edit </h1>
      </div>
      <form  method="post" name="myform1" id='myform1' style="width: 100%; border:none;"  action="device_update.php">
        <div class="container mt-3 ">
          <div class="row d-flex justify-content-center align-self-center md-7" style="margin: left 4px;;">
            <div class="col-md-12 col-lg-12 ">
              <div class="card  " id="form1" style="border:none;">
                <input type="hidden" name="id" id="id1">
                  <div class="forms-inputs mb-4"> 
                    <label for="status">Device Type</label>
                      <select name="type11" id="type11" required class=" form-select ">
                        <option value="please select appropriate Device type" selected disabled>please select appropriate role</option>
                        <option value="Laptop">Laptop</option>
                        <option value="Desktop">Desktop</option>
                        <option value="Phone">Phone</option>
                      </select>
                  </div>
                  <div class="forms-inputs mb-4"> 
                    <label class="form-lable" for="fname">Device name</label> 
                    <input name="name11" id="name11" type="text" class="form-control" placeholder="enter cource name" >
                  </div>
                  <div class="forms-inputs mb-4"> 
                    <label for="status">status</label>
                    <select name="status11" id="status11" required class=" form-select ">
                      <option value="Available">Available</option>
                      <option value="Requested">Requested</option>
                      <option value="Unavailable">Unavailable</option>
                    </select>
                  </div>
                  <div class="mb-3"> 
                    <button name="submit1" type="submit" id="insert1"  class="btn btn-dark w-100" >Update</button> 
                  </div>
              </div>
            </div>
          </div>
        </div>
      </form>

      <script>
        jQuery('#myform1').validate({
          rules:{
            fname11:{required:true},
          },
        });
      </script>

    </div>
  </div>
</div>
</body>
</html>

</body>
</html>

<div class="container-fluid mt-5 rounded ms-5 me-5 " id="form"  ><br>
 
  <div class="text-center d-flex justify-content-end">
    <form  class="form-inline d-flex bg-defult "  action="device_record_table.php" method="get">
        <?php

if (isset($_SESSION["searchdata"])){
   echo  "<input class='form-control rounded ' id='youhave' type='text' name='valueToSearch'  placeholder='".$_SESSION['search']."'  ;>";

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
        <th scope="col">Sr No.</th>
        <th scope="col">Device</th>
        <th scope="col">employee</th>
        <th scope="col"><?php echo '<a class="up" href="device_record_table.php?sort=ASC&colunm=request_time&valueToSearch='.$_SESSION['search'].'" name="type_up" >↑</a>Request Time<a class="type_down" href="device_record_table.php?sort=DESC&colunm=request_time&valueToSearch='.$_SESSION['search'].'">↓</a>'?></th>
        <th scope="col"><?php echo '<a class="up" href="device_record_table.php?sort=ASC&colunm=assigned_time&valueToSearch='.$_SESSION['search'].'" name="type_up" >↑</a>Assigned Time<a class="type_down" href="device_record_table.php?sort=DESC&colunm=assigned_time&valueToSearch='.$_SESSION['search'].'">↓</a>'?></th>
        <th scope="col"><?php echo '<a class="up" href="device_record_table.php?sort=ASC&colunm=return_time&valueToSearch='.$_SESSION['search'].'" name="type_up" >↑</a>Return Time<a class="type_down" href="device_record_table.php?sort=DESC&colunm=return_time&valueToSearch='.$_SESSION['search'].'">↓</a>'?></th>
        <th scope="col"><?php echo '<a class="up" href="device_record_table.php?sort=ASC&colunm=reject_time&valueToSearch='.$_SESSION['search'].'" name="type_up" >↑</a>Rejected Time<a class="type_down" href="device_record_table.php?sort=DESC&colunm=reject_time&valueToSearch='.$_SESSION['search'].'">↓</a>'?></th>
        <th scope="col"><?php echo '<a class="up" href="device_record_table.php?sort=ASC&colunm=status&valueToSearch='.$_SESSION['search'].'" name="type_up" >↑</a>status<a class="type_down" href="device_record_table.php?sort=DESC&colunm=status&valueToSearch='.$_SESSION['search'].'">↓</a>'?></th>
    
      </tr>
    </thead>
    <tbody id="searchtable">
      <?php
        include 'database.php';
        // include '../class/device_record.php';
        // $data = $permissionobj -> dragdata('device_record');
        $n=1;
        while($row = mysqli_fetch_array($search_result)):?>
        <tr id="trhover">
          <td ><div class="id"><?php echo $n;?></div></td>
          <td >
            <?php
              $device_id = $row['device_id'];
              $id_query = "SELECT d_name FROM device WHERE id='$device_id'";
              $result = mysqli_query($conn, $id_query);
              $device_name = mysqli_fetch_array($result);
              echo $device_name['d_name'];
            ?>
            <div class="type"></div>
          </td>

          <td >
            <?php
              $employee_id = $row['employee_id'];
              $id_query = "SELECT name FROM user WHERE id='$employee_id'";
              $result = mysqli_query($conn, $id_query);
              $employee_name = mysqli_fetch_array($result);
              echo $employee_name['name'];
            ?>
            <div class="status"></div> 
          </td>
          <td ><div class="type"><?php  echo $row['request_time'];?></div></td>
          <td ><div class="type"><?php if($row['assigned_time'] == '0000-00-00 00:00:00') { echo '-';}else{echo $row['assigned_time'];}?></div></td>
          <td ><div class="type"><?php if($row['return_time'] == '0000-00-00 00:00:00') { echo '-';} else{echo $row['return_time'];}?></div></td>
          <td ><div class="type"><?php if($row['reject_time'] == '0000-00-00 00:00:00') { echo '-';} else{ echo $row['reject_time'];}?></div></td>
          
          <td>
            <select name="status" id="<?php echo $row['id'];?>" style="border: none;" class="status">
              <option  id="tr" selected disabled><?php echo $row['status'];?></option>
              <option value="assigned">Assigned</option>
              <option value="rejected">Rejected</option>
              <option value="returned">Return</option>
              <option value="Requested">Requested</option>
            </select>
          </td>
        </tr>
          <?php $n++; endwhile;?>
      </tbody>
  </table>

  <script>
    $(document).on('change', '.status', function(){  
      var recordid = $(this).attr("id");
      console.log(recordid);
      var value = $(this).val(); 
      // console.log(value);
      var confirmalert = confirm("Are you sure?");
      if (confirmalert == true) { 
        $.ajax({  
          url:"../class/device_record.php",  
          method:"POST",  
          data:{id:recordid,status:value},  
          dataType:"json",  
          success:function(response){
            if (response == true){
              window.location.href="device_record_table.php";
            }
            else{
             window.location.href="device_record_table.php";
            }
          }  
        }); 
      } 
    });
  </script>
  

  </script>
</div>
<ul class="pagination" >
      <?php  
      include 'database.php'; 
      $colunm =$_SESSION['device_record_colunm'];
      
      $sort=$_SESSION['device_record_sort'];
      $search = $_SESSION['search'];





        if(isset($_SESSION['search']))
        {
            $valueToSearch = $_SESSION['search'];
            $sql = "SELECT COUNT(*) FROM device_record WHERE CONCAT(`request_time`,`assigned_time`,`return_time`,`reject_time`,`status`) LIKE '%".$_SESSION['search']."%'   ";
        }
        else{
        $sql = "SELECT COUNT(*) FROM user";  
        }

        
        
        $rs_result = mysqli_query($conn,$sql);  
        $row = mysqli_fetch_row($rs_result);  
      
        $total_records = $row[0];  
          
        // Number of pages required.
        $total_pages = ceil($total_records / $limit);  
        $pagLink = "";                        
        for ($i=1; $i<=$total_pages; $i++) {
            if ($i==$pn) {
                $pagLink .= "<li id='active'class='active'style='  color:#000000; border-radius:100%;'><a id='pagelink' href='device_record_table.php?page="
                                                  .$i."&colunm=".$colunm."&sort=".$sort."&valueToSearch=".$search."'>".$i."</a></li>";
                                                  $_SESSION['numofpage']=$i;
            }            
            else  {
                $pagLink .= "<li><a id='pagelink' href='device_record_table.php?page=".$i."&colunm=".$colunm."&sort=".$sort."&valueToSearch=".$search."'>
                                                  ".$i."</a></li>";  
            }
        }  
        
        $b=$_SESSION['numofpage'];
        if($b>1){
            echo "<a id='pagelink' href='device_record_table.php?page=".($b-1)."&colunm=".$colunm."&sort=".$sort."&valueToSearch=".$search."'>⇤</a>";

        }
        echo $pagLink;  
        if($b<$total_pages)
        {
            echo "<a id='pagelink' href='device_record_table.php?page=".($b+1)."&colunm=".$colunm."&sort=".$sort."&valueToSearch=".$search."'>⇥</a>";
            
        }
        
       
        
      ?>
      

      </ul><br>





</div>

</div>



</body>
</html>
