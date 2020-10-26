<?php
 include("query/validation.php");
 if (isLoggedIn()) {
 header('location: admindash.php');
 }
 ?>
 
<!DOCTYPE html>
<html lang="en">

<head>
<style>.container {
  background-image: url("cs.jpg");}
  .h6 {
  font-size: 5px;
  color: red;
}</style>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ASR Dashboard</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <!-- Custom fonts for this template-->
</head>
<div class="container-fluid"  class="container" style="background-image: url('assets/img/log1.jpg');">
<div class="header">
		  <h6><p style="color:white"><marquee>Welcome to ASR Hospital___please put your email and password</marquee></p></h1>
		</div>
<body>
<div id="content-wrapper" class="d-flex flex-column" >
  
      <!-- Main Content -->
     <div id="content">
               <!-- Sidebar Toggle (Topbar) -->
               <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                 <i class="fa fa-bars"></i>
               </button>

                 <!-- Page Wrapper -->
        <div id="wrapper">
                    
               <!-- Default form login -->
               <form method="POST" class="text-center border border-light p-5" action="login.php">
               <?php echo display_error(); ?>
                   <p class="h4 mb-4">Sign in</p>
                
                  <!-- Email -->
                    <input type="text" name="username" class="form-control mb-4" placeholder="E-mail" required="required">

                     <!-- Password -->
                        <input type="password" name="password" class="form-control mb-4" placeholder="Password" required="required">

                      <div class="d-flex justify-content-around">
                      <div>
                     </div>
                         <div>
                      <!-- Forgot password 
                    <a href="">Forgot password?</a>-->
                   </div>
                     </div>

                       <!-- Sign in button -->
                        <button class="btn btn-info btn-block my-4" type="submit" name="submit">Sign in</button>

                    <!-- Register 
                  <p>Not a member?
                    <a href="">Register</a>
                     </p>-->

                    <!-- Social login 
                         <p>or sign in with:</p>

                       <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
                               <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
                               <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
                                <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>-->
                         <br>
                 </form>
              
           </div>
         
       </div>
   </div>
   
 </div>
 <?php include('library/footer.php')?>
</body>
</html>