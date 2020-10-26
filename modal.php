<?php
$con=mysqli_connect("localhost","root","") or die("Could not Connect My Sql");
mysqli_select_db("test",$con)  or die("Could connect to Database");
?>