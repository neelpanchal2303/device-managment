
<?php


  include 'header.php';


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


  include '../class/device.php';

  $deviceobj = new Device;
  $search_result = $deviceobj -> dragdata('device');

?>

<?php

// $conn = mysqli_connect("localhost", "root", "", "device");


// $limit = 3;
// $colunm = "";  // Number of entries to show in a page.
// // Look for a GET variable page if not found default is 1.     
// if (isset($_GET["page"])) { 
//   $pn  = $_GET["page"]; 
// } 
// else { 
//   $pn=1; 
// };  

// $start_from = ($pn-1) * $limit;  

 

// $sql = "SELECT * FROM users LIMIT $start_from, $limit";  
// $search_result = mysqli_query ($conn,$sql);
// ?>

<?php
// if (isset($_GET['sort'])) {
//     $colunm = $_GET['sort'];



//     if($colunm =='idup'){
//         $connect = mysqli_connect("localhost", "root", "", "device");
//         $sortquery = "SELECT * FROM device  order by id ASC LIMIT $start_from, $limit";
        
//         $search_result = mysqli_query($connect,$sortquery);
//     }
//     if ($colunm =='iddown') {
//         $connect = mysqli_connect("localhost", "root", "", "device");
//         $sortquery = "SELECT * FROM device  order by id DESC LIMIT $start_from, $limit";
//         $search_result = mysqli_query($connect,$sortquery);
//        } 





//     if($colunm =='typeup'){
//         $connect = mysqli_connect("localhost", "root", "", "device");
//         $sortquery = "SELECT * FROM device order by type ASC LIMIT $start_from, $limit";
//         $search_result = mysqli_query($connect,$sortquery);
//     }
//     if ($colunm =='typedown') {
//         $connect = mysqli_connect("localhost", "root", "", "device");
//         $sortquery = "SELECT * FROM device  order by type DESC LIMIT $start_from, $limit";
//         $search_result = mysqli_query($connect,$sortquery);
//        } 

//        if($colunm =='nameup'){
//         $connect = mysqli_connect("localhost", "root", "", "device");
//         $sortquery = "SELECT * FROM device order by name ASC LIMIT $start_from, $limit";
//         $search_result = mysqli_query($connect,$sortquery);
//         }
//         if ($colunm =='namedown') {
//           $connect = mysqli_connect("localhost", "root", "", "device");
//           $sortquery = "SELECT * FROM device  order by name DESC LIMIT $start_from, $limit";
//           $search_result = mysqli_query($connect,$sortquery);
//         } 





//        if($colunm =='statusup'){
//         $connect = mysqli_connect("localhost", "root", "", "device");
//         $sortquery = "SELECT * FROM device  order by status ASC LIMIT $start_from, $limit";
//         $search_result = mysqli_query($connect,$sortquery);
//     }
//     if ($colunm =='statusdown') {
//         $connect = mysqli_connect("localhost", "root", "", "device");
//         $sortquery = "SELECT * FROM device  order by status DESC LIMIT $start_from, $limit";
//         $search_result = mysqli_query($connect,$sortquery);
//        } 

//    }

/////////////////////////////////////////////////////
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

<div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel "aria-hidden="true" style="width: 100%;">
  <div class="modal-dialog " role="document" style="width: 2000px;" >
    <div class="modal-content col-md-12 col-lg-12 " style="width: 100%; border:none;" id="form1">
      <div style="margin-top:10%;" style="width: 100%;">
        <h1 class="d-flex justify-content-center text-light">Registration</h1>
      </div>
      <form  method="post" name="myform" id='myform' style="width: 100%; border:none;"  action="../class/device.php">
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
                    <option value="accessories">Accessories</option>
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
  <div class="modal-dialog " role="document" style="width: 2000px;">
    <div class="modal-content col-md-12 col-lg-12 " style="width: 100%; border:none;" id="form1">
      <div style="margin-top:10%;" style="width: 100%;">
        <h1 class="d-flex justify-content-center text-light">edit </h1>
      </div>
      <form  method="post" name="myform1" id='myform1' style="width: 100%; border:none;"  action="../class/device.php">
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
                    <input name="name11" id="name11" type="text" class="form-control" placeholder="enter device name" >
                  </div>
                  <div class="forms-inputs mb-4"> 
                    <label for="status">status</label>
                      <select name="status11" id="status11" required class=" form-select ">
                        <option value="Available">available</option>
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
  <div class="d-flex justify-content-end">
   
  <div class="text-center">
        <a href="" class="btn btn-default btn-primary btn-rounded mb-4 me-4" data-toggle="modal" data-target="#addmodal">add new device</a>
      </div>
    <!-- <input class="form-control  me-3" type="search" placeholder="Search" aria-label="Search" id="myInput" style="width: 35%; height:10%;"> -->
    <div class="text-center">
    <form  class="form-inline d-flex bg-defult "  action="device.php" method="get">
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
      
      <br>
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
          <th scope="col"><?php echo '<a class="up" href="device.php?sort=ASC&colunm=type&valueToSearch='.$_SESSION['search'].'&page='.$pn.'" name="type_up" >???</a>Device Type<a class="type_down" href="device.php?sort=DESC&colunm=type&valueToSearch='.$_SESSION['search'].'&page='.$pn.'">???</a>'?></th>
          <th scope="col"><?php echo '<a class="up" href="device.php?sort=ASC&colunm=d_name&valueToSearch='.$_SESSION['search'].'&page='.$pn.'">???</a>Device name<a class="name_down" href="device.php?sort=DESC&colunm=d_name&valueToSearch='.$_SESSION['search'].'&page='.$pn.'">???</a>'?></th>
          <th scope="col"><?php echo '<a class="up" href="device.php?sort=ASC&colunm=status&valueToSearch='.$_SESSION['search'].'&page='.$pn.'">???</a>status<a class="status_down" href="device.php?sort=DESC&colunm=status&valueToSearch='.$_SESSION['search'].'&page='.$pn.'">???</a>'?></th>
          <th></th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody id="searchtable">
        <?php

          // $colunm = $deviceobj -> dragdata('device');
          $n = 1;
          while($row = mysqli_fetch_array($search_result)):?>
          <tr id="trhover">
            <td ><div class="id"><?php echo $n;?></div></td>
            <td ><div class="type"><?php  echo $row['type'];?></div></td>
            <td ><div class="fname"><?php echo $row['d_name'];?></div></td>
            <td ><div class="status"><?php echo $row['status'];?></div> </td>
            <td>
            <td>
              <a id="<?php echo $row["id"]; ?>" class='edit' name='edit' >
                <span> 
                  <button  class="btn-success rounded"> EDIT </button>
                </span>
              </a>
            </td>
            <td> 
              <button  id='<?= $row['id'] ?>' class="delete btn-danger rounded" name="deletedevice"> DELETE </button>
            </td>
          </tr>
          <?php $n++; endwhile;?>
      </tbody>
    </table>
    <script>
      $(document).on('click', '.type_up', function(){
        $('.type_up').click(function(){
          $.ajax({
            url:"../class/device.php",
            method:"POST",
            data:{sort:'ASC'}
          })

        });
        // var el = this;
        // var deleteid = $(this).attr('id');
        // console.log(deleteid);
        // var confirmalert = confirm("Are you sure?");
        // if (confirmalert == true) {
        //   $.ajax({
        //     url: '../class/device.php',
        //     type: 'POST',
        //     data: { deleteid:deleteid },
        //     success: function(response){
        //       if (response == true){
        //         alert("you cant delete this record still exist in other page");
        //       }
        //       else{
        //         window.location.href="device.php";
        //       }
        //     }
        //   });
        // }
      });
    </script>        
    <script type="text/javascript">
      $(document).ready(function(){
        $(document).on('click', '.edit', function(){  
          var resultid = $(this).attr("id");  
          $.ajax({  
            url:"device_fetch.php",
            // url:"../class/device.php",  
            method:"POST",  
            data:{resultid:resultid},  
            dataType:"json",  
            success:function(data){
              $('#id1').val(data.id); 
              $('#type11').val(data.type);  
              $('#name11').val(data.d_name);
              $('#status11').val(data.status);
              $('#insert').val("Update");  
              $('#editform').modal('show');  
            }  
          });
        });
      });

      $(document).on('click', '.delete', function(){
        var el = this;
        var deleteid = $(this).attr('id');
        console.log(deleteid);
        var confirmalert = confirm("Are you sure?");
        if (confirmalert == true) {
          $.ajax({
            url: '../class/device.php',
            type: 'POST',
            data: { deleteid:deleteid },
            success: function(response){
              if (response == true){
                alert("you cant delete this record still exist in other page");
              }
              else{
                window.location.href="device.php";
              }
            }
          });
        }
      });

    </script>
  </div>
  <ul class="pagination" >
      <?php  
      $colunm =$_SESSION['colunm'];
      
      $sort=$_SESSION['sort'];
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
                $pagLink .= "<li id='active'class='active'style='  color:#000000; border-radius:100%;'><a id='pagelink' href='device.php?page="
                                                  .$i."&colunm=".$colunm."&sort=".$sort."&valueToSearch=".$search."'>".$i."</a></li>";
                                                  $_SESSION['numofpage']=$i;
            }            
            else  {
                $pagLink .= "<li><a id='pagelink' href='device.php?page=".$i."&colunm=".$colunm."&sort=".$sort."&valueToSearch=".$search."'>
                                                  ".$i."</a></li>";  
            }
        }  
        
        $b=$_SESSION['numofpage'];
        if($b>1){
            echo "<a id='pagelink' href='device.php?page=".($b-1)."&colunm=".$colunm."&sort=".$sort."&valueToSearch=".$search."'>???</a>";

        }
        echo $pagLink;  
        if($b<$total_pages)
        {
            echo "<a id='pagelink' href='device.php?page=".($b+1)."&colunm=".$colunm."&sort=".$sort."&valueToSearch=".$search."'>???</a>";
            
        }
        
       
        
      ?>
      

      </ul><br>


  
</div>
</div>



</body>
</html>
