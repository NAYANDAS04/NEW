<?php
session_start();
include('library/menu.php');
include('query/server.php');
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
           <div class="container-fluid">
           <div class="card o-hidden border-0 shadow-lg my-5">
           <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
           <div class="row">
      
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" method="POST" action="registration.php">
                <div class="row">
                  <div class="col-sm-6">
                    <input type="text" name="uname" class="form-control form-control-user" id="exampleFirstName" placeholder="User Name" required="required">
                  </div></div><br>
                  <div class="row">
                  <div class="col">
                    <input type="text" name="fname" class="form-control form-control-user" id="exampleMiddleName" placeholder="First Name" required="required">
                  </div>
                  <div class="col">
                    <input type="text" name="mname" class="form-control form-control-user" id="exampleMiddleName" placeholder="Middle Name">
                  </div>
                <div class="col">
                  <input type="text" name="lname" class="form-control form-control-user" id="exampleLastName" placeholder="Last Name" required="required">
                </div></div><br>
                <div class="row">
                <div class="col-sm-6">
                  <input type="contact" name="contact" class="form-control form-control-user" id="exampleLastName" placeholder="Contact" required="required">
                </div></div>
                <br>
                <div class="row">
                <div class="col-sm-6">
                  <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
                </div>
                </div>
                <br>
                <div class="row">
                <div class="col">
                <div class="input-group" type="option" class="form-control form-control-user">         
                                
                                     <select name="type" required>
                               <option value="">User Type</option>
                             <option>accountant</option>
                             <option>pharmacist</option>
                              </select> 
                            </div>
                        </div><div class="col">
                        <label><b>Status Of the User</b>
                        <div class="row">
                     <div class="col" >
                    <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="status" value="Y" required>Active
                 </label>
              </div>
             <div class="col">
             <label class="form-check-label">
           <input type="radio" class="form-check-input" name="status" value="N"/>Inactive
           </label>
          </div></div>
          </div>
               <button class="btn btn-primary btn-user btn-block" name="submit" type="submit">Submit</button>
              </form></div>
           </div>
           </div>
          </div>
         </div>
       </div>
  </div><?php include('library/footer.php');?>
  </div>
    <!-- End of Content Wrapper -->
  </div>
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
</body>
</html>