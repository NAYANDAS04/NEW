<?php
session_start();
include('library/menu.php')
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
            <?php include('library/header.php') ?>
      <!-- Main Content -->
      <div id="content">
        <div class="container-fluid">
        <div class="text-center">
                <h1 class=0 mb-4">Company Details</h1>
              </div>
        <div class="card o-hidden border-0 shadow-lg my-5">
         <div >
        <!-- Nested Row within Card Body -->
        <div class="column">
          
            <div class="p-5">
              
            <form>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" id="text" placeholder="Company_name" name="Company_name">
    </div>
    <div class="col">
      <input type="text" class="form-control" id="text" placeholder="Company_branch_name" name="Company_branch_name">
    </div></div><br>
    <div class="row">
    <div class="col">
      <input type="number" class="form-control" id="number" placeholder="Company_contact_no." name="Company_contact_no.">
    </div>
    <div class="col">
      <input type="address" class="form-control" id="address" placeholder="Company_address" name="Company_address">
    </div>
    <div class="col">
      <input type="url" class="form-control" id="url" placeholder="Company_website" name="Company_website">
    </div>
  </div><br>
  <div class="row">
    <div class="col">
      <input type="email" class="form-control" id="email" placeholder="Company_email" name="Company_email">
    </div>
    <div class="col">
      <input type="text" class="form-control" id="text" placeholder="Company_is_active" name="Company_is_active">
    </div>
    
  </div><br>
  <div class="row">
    <div class="col">

      <input type="text" class="form-control" id="text" placeholder="Created_by" name="Created_by">
    </div>
    <div class="input--style-1 js-datepicker">
                   <input type="date" name="expire_date" min="1000-01-01"
                    max="3000-12-31" class="form-control" placeholder="Created_date" name="Created_date" >
                    <a align="center"><h6>(Created_date)</h6></a>
                    </div>
                    <div class="col">
      <input type="text" class="form-control" id="text" placeholder="Lastmodified_by" name="Lastmodified_by">
    </div>
    <div class="input--style-1 js-datepicker">
                   <input type="date" name="expire_date" min="1000-01-01"
                    max="3000-12-31" class="form-control" placeholder="Lastmodified_date" name="Lastmodified_date" >
                    <a align="center"><h6>(Lastmodified_date)</h6></a>
                    </div>
    
    </div>
  <br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
            
           </div>
         </div>
       </div>
     </div>  
  </div> 
  </div><?php include('library/footer.php')?>
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
</html> 