<!-- BOOTSTRAP CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />


<!-- ! Main -->
<?Php 
include ("code.php");
include("dashboard.html");
if(isset($_GET['type']) && $_GET['type'] == 'delete' && isset($_GET['id'])) {
$id = mysqli_real_escape_string($connection, $_GET['id']);
mysqli_query($connection, "DELETE from alumnus_bio where id='$id' ");
}
?>

<main class="main users chart-page" id="skip-target">
  <div class="container">
   
  <div class="col-lg-12">
	<div class="row mb-4 mt-4">
		<div class="col-md-12">
			
		</div>
	</div>
	<div class="row">
		<!-- FORM Panel -->

		<!-- Table Panel -->
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h5 class="fw-bold">List of Alumni</h5>
					<div class="d-md-flex justify-content-md-end">
        <button type="submit" class="btn btn-primary btn-sm col-sm-2"><a href="add_alumni.php">+ New Alumni</a></button>
        </div>
				</div>
				<div class="card-body">
					<table class="table table-condensed table-bordered table-hover table-primary">
						<!-- <colgroup>
							<col width="5%">
							<col width="10%">
							<col width="15%">
							<col width="15%">
							<col width="30%">
							<col width="15%">
						</colgroup> -->
						<thead>
							<tr>
								<th class="text-center">#</th>
								<th class="">Avatar</th>
								<th class="">Name</th>
								<th class="">Course Graduated</th>
								<th class="">Status</th>
								<th class="text-center">Action</th>
							</tr>
						</thead>
		  <tbody>
							<?php 
							   if(isset($_GET['type']) && $_GET['type'] == 'delete' && isset($_GET['id'])) {
								 $id = mysqli_real_escape_string($connection, $_GET['id']);
								 mysqli_query($connection, "DELETE from alumnus_bio where id='$id' ");
							   }
							$i = 1;
							$alumnus_bio = $connection->query("SELECT * from alumnus_bio");
							while($row=$alumnus_bio->fetch_assoc()):
								
							?>
							<tr>
								<td class="text-center"><?php echo $i++ ?></td>
								<td class="text-center">
									<div class="avatar">
									 <img src="http://localhost/alumni-management-system/alumni/admin/assets/uploads/1602730260_avatar.jpg" class="" alt="">
									</div>
								</td>
								<td class="">
									 <p> <b><?php echo ucwords($row['firstname']) ?></b></p>
								</td>
								<td class="">
									 <p> <b><?php echo $row['course_graduate'] ?></b></p>
								</td>
								<td class="text-center">
									<?php if($row['status'] == 1): ?>
										<span class="badge bg-primary">Verified</span>
									<?php else: ?>
										<span class="badge bg-secondary">Not Verified</span>
									<?php endif; ?>

								</td>
								<td class="text-center">
									<button class="btn btn-sm btn-primary view_alumni" type="button" data-id="<?php echo $row['id'] ?>" ><a href="viewalumni.php">View</a></button>
									<button class="btn btn-sm btn-success edit_alumni" type="button"><a href="add_alumni.php?id=<?Php echo $row['id'] ?> &type=delete">Edit</a></button>
									<button class="btn btn-sm btn-danger delete_alumni" type="button"><a href="alumnilist.php?id=<?Php echo $row['id'] ?> &type=delete">Delete</a></button>
								</td>
							</tr>
							<?php endwhile; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- Table Panel -->
	</div>
</div>	

</div>
<style>

td{
	vertical-align: middle !important;
}
td p{
	margin: unset
}
img{
	max-width:100px;
	max-height: :150px;
}
.avatar {
	display: flex;
	border-radius: 100%;
	width: 100px;
	height: 100px;
	align-items: center;
	justify-content: center;
	border: 3px solid;
	padding: 5px;
}
.avatar img {
	max-width: calc(100%);
	max-height: calc(100%);
	border-radius: 100%;
}
</style>
	 
</main>


<?Php 
  include("includes/footer.html")
?>

  </div>
</div>
<!-- Chart library -->
<script src="./plugins/chart.min.js"></script>
<!-- Icons library -->
<script src="plugins/feather.min.js"></script>
<!-- Custom scripts -->
<script src="js/script.js"></script>
</body>

</html>







         
