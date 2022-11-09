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
  include '../class/employee.php';
  $employeeobj = new Employee;
  $search_result = $employeeobj -> dragdata('user');

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
      <form  method="post" name="myform" id='myform' style="width: 100%; border:none;"  action="../class/employee.php">
        <div class="container mt-3 ">
          <div class="row d-flex justify-content-center align-self-center md-7" style="margin: left 4px;;">
            <div class="col-md-12 col-lg-12 ">
              <div class="card  " id="form1" style="border:none;">
                <div class="forms-inputs mb-4"> 
                  <label class="form-lable" for="fname">Employee Name</label> 
                  <input name="name" id="name" type="text" class="form-control" placeholder="enter Employee Name" >
                </div>
                <div class="forms-inputs mb-4"> 
                  <label class="form-lable" for="lname">Employee Email</label> 
                  <input name="email" id="email" type="email" class="form-control" placeholder="enter Employee Email Add" >
                </div>
                <div class="forms-inputs mb-4"> 
                  <label class="form-lable" for="lname">Employee Password</label> 
                  <input name="password" id="password" type="password" class="form-control" placeholder="enter password" maxlength="8" >
                </div>
                <div class="forms-inputs mb-4"> 
                  <label class="form-lable" for="lname">Employee Number</label> 
                  <input name="phone" id="phone" type="tel" class="form-control" placeholder="Employee Phone Number" maxlength="10" >
                </div>
                <div class="forms-inputs mb-4"> 
                  <label class="form-lable" for="dob">Date Of Joining</label> 
                  <input name="doj" id="doj" type="date" class="form-control" placeholder="enter Employee DOJ" >
                </div>
                <div class="forms-inputs mb-4">
                  <label for="password">Employee Role</label>  
                    <select name="role" id="role" class="form-select">
                      <option value="employee">Employee</option>
                      <option value="admin">Admin</option>
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
            name:{required:true},
            password:{required:true},
            doj:{required:true},  
            role:{required:true},
            email:{
              required:true,
              remote:{
                url:"report1.php",
                type:"post",
                async: false,
                data:{
                  email: function() {
                    return  $('#email').val();
                  }
                }
              },
            },
            phone:{
              required:true,
              number:true,
              remote:{
                url:"report2.php",
                type:"post",
                async: false,
                data:{
                  email: function() {
                    return  $('#phone').val();
                  }
                }
              },
            }
          },
          messages:{
            email:{
              remote:"Email is already Teken..!"
            },
            phone:{
              remote:"Phone Number is already Teken..!"
            },
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
      <form  method="post" name="myform1" id='myform1' style="width: 100%; border:none;"  action="../class/employee.php">
        <div class="container mt-3 ">
          <div class="row d-flex justify-content-center align-self-center md-7" style="margin: left 4px;;">
            <div class="col-md-12 col-lg-12 ">
              <div class="card  " id="form1" style="border:none;">
                <input type="hidden" name="id" id="id1">
              </div>

              <div class="forms-inputs mb-4"> 
                <label class="form-lable" for="fname">Employee Name</label> 
                <input name="name1" id="name1" type="text" class="form-control" placeholder="enter Employee Name" >
              </div>

              <div class="forms-inputs mb-4"> 
                <label class="form-lable" for="lname">Employee Email</label> 
                <input name="email1" id="email1" type="email" class="form-control" placeholder="enter Employee Email Add" >
              </div>

              <div class="forms-inputs mb-4"> 
                <label class="form-lable" for="lname">Employee Number</label> 
                <input name="phone1" id="phone1" type="tel" class="form-control" placeholder="Employee Phone Number" maxlength="10" >
              </div>

              <div class="forms-inputs mb-4"> 
                <label class="form-lable" for="dob">Date Of Joining</label> 
                <input name="doj1" id="doj1" type="date" class="form-control" placeholder="enter Employee DOJ" >
              </div>

              <div class="forms-inputs mb-4">
                <label for="password">Employee Role</label>  
                  <select name="role1" id="role1" class="form-select">
                    <option value="employee">Employee</option>
                    <option value="admin">Admin</option>
                  </select>
              </div>
            </div>
              <div class="mb-3"> 
                <button name="submit111" type="submit" id="insert1"  class="btn btn-dark w-100" >Update</button> 
              </div>
          </div>
            </div>
          </div>
        </div>
      </form>

      <script>
        jQuery('#myform1').validate({
          rules:{
            fname:{required:true},
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
<!-- --------------------------------------- -->


<!--  -->

<div class="container-fluid mt-5 rounded ms-5 me-5 " id="form"  ><br>
  <div class="d-flex justify-content-end">
    <!-- <input class="form-control  me-3" type="search" placeholder="Search" aria-label="Search" id="myInput" style="width: 35%; height:10%;"> -->
      <div class="text-center">
        <a href="" class="btn btn-default btn-primary btn-rounded mb-4 me-4" data-toggle="modal" data-target="#addmodal">add new employee</a>
      </div>
      <div class="text-center">
    <form  class="form-inline d-flex bg-defult "  action="employee.php" method="get">
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
  <table class="table mt-3 rounded " id="editableTable">
    <thead class="bg-dark">
      <tr class="text-white">
        <th scope="col">Sr No.</th>
        <th scope="col"><?php echo '<a class="up" href="employee.php?sort=ASC&colunm=name&valueToSearch='.$_SESSION['search'].'" name="type_up"  >   ↑  </a>  Name   <a class="type_down" href="employee.php?sort=DESC&colunm=name&valueToSearch='.$_SESSION['search'].'">  ↓ </a>'?></th>
        <th scope="col"><?php echo '<a class="up" href="employee.php?sort=ASC&colunm=email&valueToSearch='.$_SESSION['search'].'" name="type_up" >   ↑  </a>  Email  <a class="type_down" href="employee.php?sort=DESC&colunm=email&valueToSearch='.$_SESSION['search'].'"> ↓ </a>'?></th>
        <th scope="col"><?php echo '<a class="up" href="employee.php?sort=ASC&colunm=phone&valueToSearch='.$_SESSION['search'].'" name="type_up" >   ↑  </a>  Phone  <a class="type_down" href="employee.php?sort=DESC&colunm=phone&valueToSearch='.$_SESSION['search'].'"> ↓ </a>'?></th>
        <th scope="col"><?php echo '<a class="up" href="employee.php?sort=ASC&colunm=doj&valueToSearch='.$_SESSION['search'].'" name="type_up"   >   ↑  </a>  Doj    <a class="type_down" href="employee.php?sort=DESC&colunm=doj&valueToSearch='.$_SESSION['search'].'">   ↓ </a>'?></th>
        <th scope="col"><?php echo '<a class="up" href="employee.php?sort=ASC&colunm=role&valueToSearch='.$_SESSION['search'].'" name="type_up"  >   ↑  </a>  Role   <a class="type_down" href="employee.php?sort=DESC&colunm=role&valueToSearch='.$_SESSION['search'].'">  ↓ </a>'?></th>
        <th >                                                                                                                                                                                                                                                          </th>
        <th >                                                                                                                                                                                                                                                          </th>
        <th >                                                                                                                                                                                                                                                          </th>
      </tr>
    </thead>

    <?php
      // include '../class/employee.php';
      // $data = $employeeobj -> dragdata('user');
      $n =1;
      while($row = mysqli_fetch_array($search_result)):?>
      <tr id="trhover">
        <td > <div class="id    "> <?php echo $n;             ?> </div> </td>
        <td > <div class="fname "> <?php echo $row['name'];   ?> </div> </td>
        <td > <div class="fname "> <?php echo $row['email'];  ?> </div> </td>
        <td > <div class="fname "> <?php echo $row['phone'];  ?> </div> </td>
        <td > <div class="fname "> <?php echo $row['doj'];    ?> </div> </td>
        <td > <div class="fname "> <?php echo $row['role'];   ?> </div> </td>
        <td >
        <td> 
          <button id="<?php echo $row["id"]; ?>"  name="edit"  class="edit btn-success rounded"> EDIT </button>
        </td>
        <td> 
          <button  id='<?= $row['id'] ?>' class="delete btn-danger rounded" name="deleteemployee"> DELETE </button>
        </td>
      </tr>
      <?php $n++; endwhile;?>
    </table>


<script type="text/javascript">
  $(document).ready(function(){
    $(document).on('click', '.edit', function(){  
      var resultid = $(this).attr("id");  
      $.ajax({  
        url:"employee_fetch.php",  
        method:"POST",  
        data:{resultid:resultid},  
        dataType:"json",  
        success:function(data){
          $('#id1').val(data.id);  
          $('#name1').val(data.name);
          $('#email1').val(data.email);  
          $('#phone1').val(data.phone);
          $('#doj1').val(data.doj);
          $('#role1').val(data.role);
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
        url: '../class/employee.php',
        type: 'POST',
        data: { deleteid:deleteid },
        success: function(response){
          window.location.href="employee.php";
        }
      });
    }
  });

</script>
</div>
<ul class="pagination" >
      <?php  
      include 'database.php'; 
      $colunm =$_SESSION['employee_colunm'];
      
      $sort=$_SESSION['employee_sort'];
      $search = $_SESSION['search'];





        if(isset($_SESSION['search']))
        {
            $valueToSearch = $_SESSION['search'];
            $sql = "SELECT COUNT(*) FROM user WHERE CONCAT(`name`, `email`, `phone`,`doj`,`role`) LIKE '%".$_SESSION['search']."%'   ";
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
                $pagLink .= "<li id='active'class='active'style='  color:#000000; border-radius:100%;'><a id='pagelink' href='employee.php?page="
                                                  .$i."&colunm=".$colunm."&sort=".$sort."&valueToSearch=".$search."'>".$i."</a></li>";
                                                  $_SESSION['numofpage']=$i;
            }            
            else  {
                $pagLink .= "<li><a id='pagelink' href='employee.php?page=".$i."&colunm=".$colunm."&sort=".$sort."&valueToSearch=".$search."'>
                                                  ".$i."</a></li>";  
            }
        }  
        
        $b=$_SESSION['numofpage'];
        if($b>1){
            echo "<a id='pagelink' href='employee.php?page=".($b-1)."&colunm=".$colunm."&sort=".$sort."&valueToSearch=".$search."'>⇤</a>";

        }
        echo $pagLink;  
        if($b<$total_pages)
        {
            echo "<a id='pagelink' href='employee.php?page=".($b+1)."&colunm=".$colunm."&sort=".$sort."&valueToSearch=".$search."'>⇥</a>";
            
        }
        
       
        
      ?>
      

      </ul><br>






</div>

</div>



</body>
</html>