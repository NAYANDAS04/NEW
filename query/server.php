<?php
// session_start();
include("./dbconnect.php");

    // variable declaration
    $uname      ="";  
  $fname       ="";
  $mname       ="";
  $lname       ="";
  $contact     ="";
  $email       ="";
  $status      ="";
  $type      ="";
  $pass      ="";
    $errors   = array();
  
  if (isset($_POST['submit'])) {
      register();
  }/* call the login() function if register_btn is clicked
    if (isset($_POST['submit'])) {
        login();
    }*/

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header("location:index.php");
    }
    // REGISTER USER
    function register()
    {
        global $conn, $errors;

        //  receive all input values from the form
        $uname       =  e($_POST['uname']);
        $fname       =  e($_POST['fname']);
        $mname       =  e($_POST['mname']);
        $lname       =  e($_POST['lname']);
        $contact     =  e($_POST['contact']);
        $email       =  e($_POST['email']);
        $status      =  e($_POST['status']);
        $type      =  e($_POST['type']);
		
        // echo "</br>".$fname       =  e($_POST['fname']);
        // echo "</br>".$mname       =  e($_POST['mname']);
        // echo "</br>".$lname       =  e($_POST['lname']);
        // echo "</br>".$contact     =  e($_POST['contact']);
        // echo "</br>".$email       =  e($_POST['email']);
        // echo "</br>".$type        =  e($_POST['type']);
        // echo "</br>".$status      =  e($_POST['status']);
        //$password_1  =  e($_POST['password_1']);
        //$password_2  =  e($_POST['password_2']);

        // form validation: ensure that the form is correctly filled
        if (empty($fname)) {
            array_push($errors, "Username is required");
        }
        // if (empty($mname)) {
        //     array_push($errors, "Middle name is required");
        // }
        if (empty($lname)) {
            array_push($errors, "Last name is required");
        }
        if (empty($contact)) {
            array_push($errors, "Contact is required");
        }
        // if (empty($status)) {
        //     array_push($errors, "Status is required");
		// }
        // if (empty($type)) {
        //     array_push($errors, "type is required");
        // }
     
		 // echo $type;
		// foreach ($errors as $error){
		// 	echo $error .'<br>';
		// }
        $pass=md5($contact);
        // register user if there are no errors in the form
        if (count($errors) == 0) {
            //$password = md5($password_1);//encrypt the password before saving in the database
                $query="INSERT INTO user values('', '$uname','$fname','$mname','$lname','$contact','$email','$pass','$status','$type')";
                if ($conn->query($query) === TRUE) {
				  } else {
					echo "Error: " . $query . "<br>" . $conn->error;
				  }
            ?>
                           <script type="text/javascript">
                    alert("Profile creation Successfull.");
                    window.location = "registration.php";
               </script>
               <?php
            //  header('location: admindash.php');
     } }/*else {
                $query="INSERT INTO user values('','$fname','$mname','$lname','$contact','$email','$contact','$status',now())";
                mysqli_query($conn, $query);

                // get id of the created user
                $logged_in_user_id = mysqli_insert_id($conn);

                $_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
                $_SESSION['success']  = "You are now logged in";
                // header('location: index.php');
            }*/
// escape string
function e($val)
{
    global $conn;
    return mysqli_real_escape_string($conn, trim($val));
}
?>