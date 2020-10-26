<?php
include("query/validation.php");
if (!isLoggedIn()) {
  header('location: login.php');
}
include('library/menu.php');
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
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
       <?php include('library/header.php')?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <div class="container-fluid">
          <!-- Content Row -->
          <div class="table-responsive">
          <table class="table">
        <tr>
            <th>Medicine Id</th>
			<th>Type</th>
			<th>Comp.id</th>
			<th>Unit price</th>
			<th>S.qantity</th>
			<th>Rack Id</th>
			<th>Lot_no</th>
			<th>Ex_date</th>
            <th >Stalk_id</th>
            <th>Creation_date</th>
            <th >Last Modified</th>
            <th>Modified By</th>
			<th >Date of purchas</th>
			<th colspan="2">Action</th>
        </tr>
		<tr>
			<td><?php echo $emp['user_alias']; ?></td>
			<td><?php echo $emp['Name']; ?></td>
			<td><?php echo $emp['designation']; ?></td>
			<td><?php echo $emp['programme']; ?></td>
			<td><?php echo $emp['semester']; ?></td>
			<td><?php echo $emp['email']; ?></td>
			<td><?php echo $emp['mobile']; ?></td>
			<td><?php echo $emp['date']; ?></td>
            <td><?php echo $emp['status']; ?></td>
            <td><?php echo $emp['mobile']; ?></td>
			<td><?php echo $emp['date']; ?></td>
            <td><?php echo $emp['status']; ?></td>
            <td><?php echo $emp['status']; ?></td>
			<td><!--<a href="admin_view.php?edit=<?php echo $emp['user_alias']; ?>" class="edit_btn" >Details</a>-->
			<a href="query.php?del=<?php echo $emp['user_alias']; ?>" class="del_btn" >Delete</a></td>

	</tr>
</table>
</div>
           </div>
          </div>
          </div>
          <br>
          <br>
              <?php include('library/footer.php')?>
        </div>
      </div>
    </div>
</body>
</html>