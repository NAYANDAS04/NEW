<?Php
 session_start();
include "dbconnect.php";
$id=$_SESSION['userId'];
$query=mysqli_query($conn,"SELECT * FROM user where id='$id'")or die(mysqli_error());
$row=mysqli_fetch_array($query);       
include('library/menu.php');
include("query/update_profile_query.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ASR Dashboard</title>
</head>

<body>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

       <!-- Main Content -->
        <div id="content">  <?php include('library/header.php')?>
                <!-- End of Topbar -->

                 <!-- Begin Page Content -->
            <div class="container-fluid">
			 <h1 align="center">Update your profile</h1>
           <div class="card o-hidden border-0 shadow-lg my-5">
           <div class="card-body">
           <form method="post" action="update_profile.php" >
          <div class="form-group">
            <label>First name</label>
            <input type="text" class="form-control" name="fname" style="width:20em;" placeholder="Enter your Firstname" value="<?php echo $row['fname']; ?>" />
          </div>
          <div class="form-group">
            <label>middle name</label>
            <input type="text" class="form-control" name="mname" style="width:20em;" placeholder="Enter your Middle name" value="<?php echo $row['mname']; ?>" />
          </div>
          <div class="form-group">
            <label>last name</label>
            <input type="text" class="form-control" name="lname" style="width:20em;" placeholder="Enter your last name"  value="<?php echo $row['lname']; ?>" />
          </div>
          <div class="form-group">
            <label>contact</label>
            <input type="number" class="form-control" name="contact" style="width:20em;" placeholder="Enter your new number" value="<?php echo $row['contact']; ?>">
          </div>
          <div class="form-group">
            <!-- <label>Age</label>
            <input type="number" class="form-control" name="age" style="width:20em;" placeholder="Enter your Age" value="<?php echo $row['age']; ?>">
          </div>
          <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control" name="address" style="width:20em;" required placeholder="Enter your Address" value="<?php echo $row['address']; ?>"></textarea>
          </div> -->
          <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary" style="width:20em; margin:0;"><br>
            </div>
            </form>
           </div>
			  </div>
             </div>
             </div>
			 <?phpinclude('library/footer.php');?>
           </div>
          </div>
       </div>
	   <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
 </div>
  <!-- Logout Modal-->
</body>
</html>