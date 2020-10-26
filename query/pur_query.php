<?php
session_start();
include("dbconnect.php");

if (isset($_POST['submit'])) {
        
    // variable declaration
  $dop       =$_POST['dop'];
  $dor       =$_POST['dor'];
  $qty       =$_POST['qty'];
  $dis       =$_POST['dis']; 
  $unit      =$_POST['unit_price'];
  $lot       =$_POST['lot'];
  $total     =$_POST['total_amount'];
  $hns       =$_POST['hns'];
  $igst      =$_POST['igst'];
  $cgst      =$_POST['cgst'];
  $sgst      =$_POST['sgst'];
  
  // $total1= ($qty * $unit);
  // $total = $total1 - ($total1 * ($dis/100));
              $query="INSERT INTO purchase  values('', '$dop','$dor','$qty','$dis','$unit','$lot','$total','$hns','$igst','$cgst','$sgst')";
             if ($conn->query($query) === TRUE) {
            } else {
              echo "Error: " . $query . "<br>" . $conn->error;
            }
              }  
            ?> <script>
                  alert('successful!');
                  window.open('admindash.php','_self');
               </script>