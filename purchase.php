<?php
include "menu.php";
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
            
      <!-- Main Content -->
      <div id="content">
        <div class="container-fluid">
        <div class="card o-hidden border-0 shadow-lg my-5">
         <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">product details</h1>
              </div>
        <form method="POST" action="pur_query.php">
        <!-- <div align="center" class="form-group">
            <input type="Invoice no" name="invoice" class="form-control" required="required"  placeholder="invoice no."></div>
            -->date of purchase
            <div class="input--style-1 js-datepicker">
                   <input type="date" name="dop" min="1000-01-01"
                    max="3000-12-31" class="form-control" placeholder="Contact" required="required"  placeholder="reg date">
                    </div>
           return date
                <div class="input--style-1 js-datepicker">
                   <input type="date" name="dor" min="1000-01-01"
                    max="3000-12-31" class="form-control" placeholder="Contact" required="required"  placeholder="reg date">
                    </div>
             <div align="center" class="form-group">
                <input type="number" name="qty" class="form-control" min="1" max="1000" required="required"  placeholder="quantity"></div>
                <div class="column">
            <div  class="form-group">
                <input type="Discount" name="dis" class="form-control" required="required"  placeholder="discount"></div>
            <div align="center" class="form-group">
                <input type="Unit price" name="unit_price" class="form-control" required="required"  placeholder="unit price"></div>
                                                 
                <div align="center"class="form-group">
                    
                    <input type="Lot-no" name="lot" class="form-control" required="required"  placeholder="lot no."></div>
                    <div align="center" class="form-group">
                       
                        <input type="Total amount" name="total_amount" class="form-control" required="required"  placeholder="total amount"></div>

                        <div class="form-group">
                      
                            <textarea class="form-control" name="hns" rows="1" id="comment" placeholder="HNS"></textarea>
                                   </div>
                 <div align="center" class="form-group">
                          <label for="IGST">IGST:</label>
                          <input type="IGST" name="igst" class="form-control" required="required">
                        <div align="center" class="form-group">
                         <label for="CGST">CGST:</label>
                          <input type="CGST" name="cgst" class="form-control" required="required">
                            <div align="center" class="form-group">
                            <label for="SGST">SGST:</label>
                            <input type="SGST" name="sgst" class="form-control" required="required"></div>
               <button class="btn btn-primary btn-user btn-block" type="submit" name="submit">Submit</button>  
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
</div>
     <!-- Vendor JS-->
     <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>
    <script src="vendor/jquery/jquery.min1.js"></script>
     <script src="js/global.js"></script>
</body> 
</html> <?php include "footer.php"?>