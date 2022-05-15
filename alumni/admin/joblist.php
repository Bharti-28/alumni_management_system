<!-- BOOTSTRAP -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">      

<?Php 
    include("code.php");
    include("dashboard.html");
?>

    <!-- ! Main -->
    <main class="main users chart-page" id="skip-target">
      <div class="container">
	<div class="col-lg-12">
		<div class="row mb-4 mt-4">
			<div class="col-md-12">
				
			</div>
		</div>
		<div class="row">
			<!-- FORM Panel -->
						
	
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
						<h5 class="fw-bold">Job List</h5>
					<div class="d-md-flex justify-content-md-end">
        <button type="submit" class="btn btn-primary btn-sm col-sm-2"><a href="addnew_job.php">+ New Job</a></button>
        </div>
					<div class="card-body">
						
						<table class="table table-bordered table-primary table-condensed table-hover">
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="">Company</th>
									<th class="">Job Title</th>
									<th class="">Posted By</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								if(isset($_GET['type']) && $_GET['type'] == 'delete' && isset($_GET['id'])) {
								  $id = mysqli_real_escape_string($connection, $_GET['id']);
								  mysqli_query($connection, "DELETE from careers where id='$id' ");
								}

								$i = 1;
								$jobs =  $connection->query("SELECT * from careers");
								while($row=$jobs->fetch_assoc()):
									
								?>
								<tr>
									
									<td class="text-center"><?php echo $i++ ?></td>
									<td class="">
										 <p><b><?php echo ucwords($row['company']) ?></b></p>
										 
									</td>
									<td class="">
										 <p><b><?php echo ucwords($row['job_title']) ?></b></p>
										 
									</td>
									<td class="">
										 <!-- <p><b><?php echo ucwords($row['location']) ?></b></p> -->
										 
									</td>
									<td class="text-center">
										<button class="btn btn-sm btn-primary view_career" type="button" style="height: 2rem;" data-id="<?php echo $row['id'] ?>" ><a href="viewjob.php">View</a></button>
										<button class="btn btn-sm btn-success edit_career" type="button" style="height: 2rem;" data-id="<?php echo $row['id'] ?>" >Edit</button>
										<button class="btn btn-sm btn-danger delete_career" type="button" style="height: 2rem;"><a href="joblist.php?id=<?Php echo $row['id'] ?> &type=delete">Delete</a></button>
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







         


    