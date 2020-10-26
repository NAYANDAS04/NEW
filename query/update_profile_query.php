<?php
// session_start();
include("./dbconnect.php");
if(isset($_POST['submit']))
{
  $id=$_SESSION['userId'];
  $fname = $_POST['fname'];
  $mname = $_POST['mname'];
  $lname = $_POST['lname'];
  $contact = $_POST['contact'];
  $query = "UPDATE user SET fname = '$fname', mname = '$mname', lname = '$lname', contact = '$contact' WHERE id = '$id' ";
              $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
              $err="<font color='green'>Password have been Changed successfully !!</font>";
              ?>
               <script type="text/javascript">
      alert("Profile Update Successfull.");
      window.location = "update_profile.php";
  </script>
  <?php
       }   
          
?>