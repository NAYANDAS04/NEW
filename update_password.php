<?Php
session_start();
include('library/menu.php');
include("query/update_password_query.php")
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
			 <h1 align="center">Update your password</h1>
           <div class="card o-hidden border-0 shadow-lg my-5">
           <div class="card-body p-0">
		   <form method="post" action="update_password.php">
              <table border="0" style="margin: auto;">
              <tr>
	            <th><?php echo @$err; ?></th>
                </tr>
	
<tr>
	<th height="87">Old Password:  
    <input type="password" name="op" value="" placeholder="enter your old password" class="form-control" required/></th>
</tr>
	
<tr>
	<th height="93">New Password:
    <input type="password" name="np" value="" placeholder="enter your new password" class="form-control"  required/><br /></th>
</tr>
 
<tr>
	<th height="87">Confirm Password:
    <input type="password" name="cp" value=""  placeholder="re-enter your new password" class="form-control" required/><br /></th>
</tr>
<tr>
	<th rowspan="2"><input type="submit" value="Update Password" name="update_password" class="btn btn-success"/></th>
</tr>
</table>
</form>
</div>
			  </div>
             </div>
             </div>
			 <?php include('library/footer.php')?>
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