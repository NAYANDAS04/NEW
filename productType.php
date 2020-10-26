<?php
session_start();
include "menu.php"
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
<body id="page-top">
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
            <?php include  "header.php" ?>
      <!-- Main Content -->
      <div id="content">
        <div class="container-fluid">
        <div class="text-center">
                <h1 class=0 mb-4">Product Details</h1>
              </div>
        <div class="card o-hidden border-0 shadow-lg my-5">
         <div >
        <!-- Nested Row within Card Body -->
        <div class="column">
          
            <div class="p-5">

            <form>
            <div class="row">
            <div class="col-sm-6">

              
  <input type="text" id="name" name="ProductType_name" placeholder="ProductType_name"></div><br>
<div class="col-sm-6">
  <label for="text"> ProductType_is_active:</label>
  <div class="row">
  <div class="col" >
  
                <label>
                    <input type="radio" class="form-check-input" name="status" value="Y"/>Active
                 </label>
              </div>
              <div class="col">
             <div class="form-check">
        <label>
           <input type="radio" class="form-check-input" name="status" value="N"/>Inactive
           </label>
          </div></div></div></div></div><br>
  <div class="row">
  <div class="col-sm-6">

  <input type="text" id="name" name="Created by" placeholder="Created by"></div><br><br>
<div class="col-sm-6">
  <label for="date">Created date:</label>
<input type="date" id="date" name="created date"></div></div><br><br>
<div class="row">
<div class="col-sm-6">

  <input type="text" id="name" name="Last modified by" placeholder="Last modified by"></div><br><br>
<div class="col-sm-6">  
  <label for="date">Last modified date:</label>
<input type="date" id="date" name="Last modified date">

</div></div>
  <br><br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
            
           </div>
         </div>
       </div>
     </div>  
  </div> 
  </div>
</div>
</div>
</div>
     <!-- Vendor JS-->
     <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>
    <script src="vendor/jquery/jquery.min1.js"></script>
     <script src="js/global.js"></script>
</body> 
</html> <?php include "footer.php"?>