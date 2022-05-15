<!-- BOOTSTRAP CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

<?Php 
  include ("code.php");
  include("dashboard.html")
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
					<h5 class="fw-bold">Users</h5>
					<div class="d-md-flex justify-content-md-end">
        <button type="submit" class="btn btn-primary btn-sm col-sm-2"><a href="add_user.php">+ New Users</a></button>
        </div>
				</div>
				<div class="card-body">
				<table class="table table-condensed table-bordered table-hover table-primary">
			<thead>
				<tr>
					<th class="text-center">#</th>
					<th class="text-center">Name</th>
					<th class="text-center">Username</th>
					<th class="text-center">Type</th>
					<th class="text-center">Action</th>
				</tr>
			</thead>
			<tbody>
			<?php
                 if(isset($_GET['type']) && $_GET['type'] == 'delete' && isset($_GET['id'])) {
                    $id = mysqli_real_escape_string($connection, $_GET['id']);
                    mysqli_query($connection, "DELETE from users where id='$id' ");
                  }
 				
 					$type = array("","Admin","Staff","Alumnus/Alumna");
 					$users = $connection->query("SELECT * FROM users order by name asc");
 					$i = 1;
 					while($row= $users->fetch_assoc()):
				 ?>
				 <tr>
				 	<td class="text-center">
				 		<?php echo $i++ ?>
				 	</td>
				 	<td>
				 		<?php echo ucwords($row['name']) ?>
				 	</td>
				 	
				 	<td>
				 		<?php echo $row['username'] ?>
				 	</td>
				 	<td>
				 		<?php echo $type[$row['type']] ?>
				 	</td>
					 <td class="text-center">
						<button class="btn btn-sm btn-success edit_event" type="button" data-id="<?php echo $row['id'] ?>" >Edit</button>
						<button class="btn btn-sm btn-danger delete_event" type="button" style="height: 2rem;"><a href="users.php?id=<?Php echo $row['id'] ?> &type=delete">Delete</a></button>
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